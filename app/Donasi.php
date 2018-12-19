<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
	protected $table='Donasi';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable = ([
		'nominal',
		'hp'
		]);


	public function Pembayaran()
	{
		return $this->hasMany('App\Pembayaran', 'pembayaran_id');
	}
	public function Pengguna()
	{
		return $this->belongsTo('App\Pengguna');
	}
    
}
