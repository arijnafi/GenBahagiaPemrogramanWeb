<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use DB;
use App\GenBaru;
use App\Http\Requests;

class PenggunaController extends Controller
{
    
    public function store(Request $request)
    {
    	Pengguna::create($request->all());
    	return redirect('/login');
    }

    public function login(Request $request)
    {
    	$email = $request->input('email');
    	$pass = $request->input('password');

    	$check = DB::table('pengguna')->where(['email'=>$email,'password'=>$pass])->first();

    	if (isset($check))
    	{
    		session(['key' => $check->id_user]);
    		return redirect('/logged');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }

    public function logout(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/login');

    }
    public function index()
    {
        $pengguna=Pengguna::all();
        $user = Pengguna::where('id_user',session('key'))->value('nama');
        return view('profile', compact('pengguna','user'));

    }
}
