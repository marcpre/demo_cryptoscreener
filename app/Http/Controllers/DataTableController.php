<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return all coins
        $c = DB::table('tick_data')
            ->select('*')
            ->join('coin_basis', 'coin_basis.Id', '=', 'tick_data.coin_basis_id')
            ->join('exchanges', 'tick_data.exchanges_id', '=', 'exchanges.id')
            ->whereRaw('tick_data.id IN( SELECT MAX(tick_data.id) FROM tick_data GROUP BY tick_data.exchange_timestamp)')
            ->get()
            ->map(function ($res) {
//                // short to number format such as M, Bn etc.
//                $res->base_volume = $this->shortNumberFormat($res->base_volume);
                $res->base_volume = number_format($res->base_volume, 0);
                return $res;
            });

        // get unique pairs
        $p = DB::table('tick_data')
            ->select('pair')
            ->distinct()
            ->get();

        // get unique symbols
        // TODO optimize code for speed as it is the same
        $s = DB::table('tick_data')
            ->select('symbol')
            ->join('coin_basis', 'coin_basis.Id', '=', 'tick_data.coin_basis_id')
            ->join('exchanges', 'tick_data.exchanges_id', '=', 'exchanges.id')
            ->whereRaw('tick_data.id IN( SELECT MAX(tick_data.id) FROM tick_data GROUP BY tick_data.exchange_timestamp)')
            ->distinct()
            ->orderBy('symbol', 'asc')
            ->get();

        // get unique "exchanges"
        $e = DB::table('exchanges')
            ->select('name')
            ->orderBy('name', 'asc')
            ->distinct()
            ->get();

        // get unique "algorithm"
        $a = DB::table('tick_data')
            ->select('algorithm')
            ->join('coin_basis', 'coin_basis.Id', '=', 'tick_data.coin_basis_id')
            ->join('exchanges', 'tick_data.exchanges_id', '=', 'exchanges.id')
            ->whereRaw('tick_data.id IN( SELECT MAX(tick_data.id) FROM tick_data GROUP BY tick_data.exchange_timestamp)')
            ->distinct()
            ->orderBy('algorithm', 'asc')
            ->get();


        return view('home')
            ->with('coins', $c)
            ->with('pairs', $p)
            ->with('symbol', $s)
            ->with('exchanges', $e)
            ->with('algorithms', $a);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Create short number format such as f.ex.: 2023150 -> 2.023M or 5430120215 -> 5.430B, with 3 digit precision
     * @param $n
     * @param int $precision
     * @return string
     */
    public function shortNumberFormat($n, $precision = 3)
    {
        if ($n < 1000000) {
            // Anything less than a million
            $n_format = number_format($n);
        } else if ($n < 1000000000) {
            // Anything less than a billion
            $n_format = number_format($n / 1000000, $precision) . 'M';
        } else {
            // At least a billion
            $n_format = number_format($n / 1000000000, $precision) . 'B';
        }

        return $n_format;
    }
}
