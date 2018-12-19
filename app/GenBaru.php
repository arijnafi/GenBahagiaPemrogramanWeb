<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenBaru extends Model
{
	protected $table='GenBaru';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable = ([
		'nama',
		'ttl',
		'alamat',
		'hobby',
		'citacita',
		'foto',
		'deskripsi'
		]);
	public function Pengguna()
	{
		return $this->belongsTo('App\Pengguna');
	}

}
