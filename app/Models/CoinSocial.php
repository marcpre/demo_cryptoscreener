<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Dec 2018 18:02:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CoinSocial
 * 
 * @property int $id
 * @property int $coin_basis_id
 * @property string $netowork_name
 * @property string $url
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\CoinBasi $coin_basi
 *
 * @package App\Models
 */
class CoinSocial extends Eloquent
{
	protected $table = 'coin_social';

	protected $casts = [
		'coin_basis_id' => 'int'
	];

	protected $fillable = [
		'coin_basis_id',
		'netowork_name',
		'url'
	];

	public function coin_basi()
	{
		return $this->belongsTo(\App\Models\CoinBasi::class, 'coin_basis_id');
	}
}
