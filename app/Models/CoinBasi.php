<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Dec 2018 18:02:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CoinBasi
 * 
 * @property int $Id
 * @property string $symbol
 * @property string $image_url
 * @property string $coin_name
 * @property string $full_name
 * @property string $proof_type
 * @property int $total_supply
 * @property float $market_cap
 * @property string $algorithm
 * @property int $ico_year
 * @property bool $pays_dividends
 * @property bool $fully_premined
 * @property string $smart_contract_address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $coin_socials
 * @property \Illuminate\Database\Eloquent\Collection $indicators
 * @property \Illuminate\Database\Eloquent\Collection $tick_data
 *
 * @package App\Models
 */
class CoinBasi extends Eloquent
{
	protected $primaryKey = 'Id';

	protected $casts = [
		'total_supply' => 'int',
		'market_cap' => 'float',
		'ico_year' => 'int',
		'pays_dividends' => 'bool',
		'fully_premined' => 'bool'
	];

	protected $fillable = [
		'symbol',
		'image_url',
		'coin_name',
		'full_name',
		'proof_type',
		'total_supply',
		'market_cap',
		'algorithm',
		'ico_year',
		'pays_dividends',
		'fully_premined',
		'smart_contract_address'
	];

	public function coin_socials()
	{
		return $this->hasMany(\App\Models\CoinSocial::class, 'coin_basis_id');
	}

	public function indicators()
	{
		return $this->hasMany(\App\Models\Indicator::class, 'coin_basis_id');
	}

	public function tick_data()
	{
		return $this->hasMany(\App\Models\TickDatum::class, 'coin_basis_id');
	}
}
