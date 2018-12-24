<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 23 Dec 2018 18:02:39 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Exchange
 * 
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $tick_data
 *
 * @package App\Models
 */
class Exchange extends Eloquent
{
	protected $fillable = [
		'name',
		'url',
		'description'
	];

	public function tick_data()
	{
		return $this->hasMany(\App\Models\TickDatum::class, 'exchanges_id');
	}
}
