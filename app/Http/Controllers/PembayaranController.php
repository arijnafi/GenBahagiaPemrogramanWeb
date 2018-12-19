<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use App\Pembayaran;

class PembayaranController extends Controller
{
	public function index() {
		$rekening = Pembayaran::All();
		return view('/donasi', compact('rekening'));
	}
}
