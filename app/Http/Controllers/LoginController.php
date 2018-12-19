<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GenBaru;
use DB;
use App\Pengguna;

class LoginController extends Controller
{
	public function latest()
	{
		$gen = DB::table('GenBaru')->orderBy('id_genbaru','desc')->take(3)->get();
		$user = Pengguna::where('id_user',session('key'))->value('nama');
		// dd($gen);
		return view('home2', compact('gen','user'));
	}
}
