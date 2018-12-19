<?php

namespace App\Http\Controllers;
use DB;
use App\GenBaru;
use App\Pembayaran;
use App\Pengguna;
use App\Donasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DonasiController extends Controller
{
	public function index()
    {
        $last = DB::table('donasi')->max('created_at');

        $bayar = DB::table('donasi')->join('pembayaran','donasi.pembayaran_id','=','pembayaran.id_pembayaran')
                ->where(['user_id'=>session('key'),'created_at'=>$last])->get();

        $user = Pengguna::where('id_user',session('key'))->value('nama');

    	return view ('summary', compact('bayar','user'));
    }

    public function store(Request $request)
    {
    	$bayar = new Donasi;

    	$bayar->nominal = Input::get('nominal');
    	$bayar->hp = Input::get('hp');
    	$bayar->pembayaran_id = Input::get('pembayaran');
    	$bayar->user_id = session('key');

    	$bayar->save();

    	return redirect('/summary');
    }
}
