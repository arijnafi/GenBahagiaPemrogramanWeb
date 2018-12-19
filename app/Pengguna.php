<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	protected $table='Pengguna';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable =[
		'nama',
		'email',
		'hp',
		'ttl',
		'password'
		];
	public function Donasi()
	{
		return $this->hasMany('App\Donasi');
	}
	public function GenBaru()
	{
		return $this->hasMany('App\GenBaru');
	}
}	