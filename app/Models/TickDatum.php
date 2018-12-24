<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Dec 2018 18:02:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TickDatum
 * 
 * @property int $id
 * @property int $coin_basis_id
 * @property int $exchanges_id
 * @property string $pair
 * @property float $high_price
 * @property float $low_price
 * @property float $bid_price
 * @property float $bid_qty
 * @property float $ask_price
 * @property float $ask_qty
 * @property float $vwap
 * @property float $open_price
 * @property float $close_price
 * @property float $last_price
 * @property float $last_qty
 * @property float $previous_close
 * @property float $price_change
 * @property float $price_change_percentage
 * @property float $average
 * @property float $base_volume
 * @property float $quote_volume
 * @property \Carbon\Carbon $open_time
 * @property \Carbon\Carbon $close_time
 * @property \Carbon\Carbon $exchange_timestamp
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CoinBasi $coin_basi
 * @property \App\Models\Exchange $exchange
 * @property \Illuminate\Database\Eloquent\Collection $indicators
 *
 * @package App\Models
 */
class TickDatum extends Eloquent
{
	protected $casts = [
		'coin_basis_id' => 'int',
		'exchanges_id' => 'int',
		'high_price' => 'float',
		'low_price' => 'float',
		'bid_price' => 'float',
		'bid_qty' => 'float',
		'ask_price' => 'float',
		'ask_qty' => 'float',
		'vwap' => 'float',
		'open_price' => 'float',
		'close_price' => 'float',
		'last_price' => 'float',
		'last_qty' => 'float',
		'previous_close' => 'float',
		'price_change' => 'float',
		'price_change_percentage' => 'float',
		'average' => 'float',
		'base_volume' => 'float',
		'quote_volume' => 'float'
	];

	protected $dates = [
		'open_time',
		'close_time',
		'exchange_timestamp'
	];

	protected $fillable = [
		'coin_basis_id',
		'exchanges_id',
		'pair',
		'high_price',
		'low_price',
		'bid_price',
		'bid_qty',
		'ask_price',
		'ask_qty',
		'vwap',
		'open_price',
		'close_price',
		'last_price',
		'last_qty',
		'previous_close',
		'price_change',
		'price_change_percentage',
		'average',
		'base_volume',
		'quote_volume',
		'open_time',
		'close_time',
		'exchange_timestamp'
	];

	public function coin_basi()
	{
		return $this->belongsTo(\App\Models\CoinBasi::class, 'coin_basis_id');
	}

	public function exchange()
	{
		return $this->belongsTo(\App\Models\Exchange::class, 'exchanges_id');
	}

	public function indicators()
	{
		return $this->hasMany(\App\Models\Indicator::class, 'tick_data_id');
	}
}
