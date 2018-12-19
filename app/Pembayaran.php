<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table='Pembayaran';
	protected $primaryKey='id';
	public $timestamp = true;
	public $incrementing = true;

	protected $fillable = ([
		'nama_rek',
		'no_rek'
		]);
	public function Donasi()
	{
		return $this->belongsTo('App\Donasi');
	}
}
