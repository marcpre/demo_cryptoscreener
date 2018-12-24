<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Dec 2018 18:02:40 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Indicator
 * 
 * @property int $id
 * @property int $coin_basis_id
 * @property int $tick_data_id
 * @property float $percentage_1h
 * @property float $percentage_24h
 * @property float $percentage_7d
 * @property float $liquidity
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CoinBasi $coin_basi
 * @property \App\Models\TickDatum $tick_datum
 *
 * @package App\Models
 */
class Indicator extends Eloquent
{
	protected $casts = [
		'coin_basis_id' => 'int',
		'tick_data_id' => 'int',
		'percentage_1h' => 'float',
		'percentage_24h' => 'float',
		'percentage_7d' => 'float',
		'liquidity' => 'float'
	];

	protected $fillable = [
		'coin_basis_id',
		'tick_data_id',
		'percentage_1h',
		'percentage_24h',
		'percentage_7d',
		'liquidity'
	];

	public function coin_basi()
	{
		return $this->belongsTo(\App\Models\CoinBasi::class, 'coin_basis_id');
	}

	public function tick_datum()
	{
		return $this->belongsTo(\App\Models\TickDatum::class, 'tick_data_id');
	}
}
