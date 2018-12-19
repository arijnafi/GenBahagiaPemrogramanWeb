<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GenBaru;
use App\Pengguna;
use Illuminate\Support\Facades\Input;
use DB;

class GenBaruController extends Controller
{
	public function index()
    {
    	$gen = GenBaru::paginate(6);
        $user = Pengguna::where('id_user',session('key'))->value('nama');
    	return view('liatanak', compact('gen','user'));
    }

    public function store(Request $request)
    {
    	$gen = new GenBaru;
    	$gen->nama = Input::get('nama');
    	$gen->ttl = Input::get('ttl');
    	$gen->alamat = Input::get('alamat');
    	$gen->hobby = Input::get('hobby');
    	$gen->citacita = Input::get('citacita');
    	$gen->deskripsi = Input::get('deskripsi');
        $gen->user_id = session('key');

    	// $image = $request('foto')

    	if (Input::hasFile('foto')) {
    		$file = Input::file('foto');
    		$file->move(public_path().'/', $file->getClientOriginalName());

    		$gen->foto = $file->getClientOriginalName();
    	};

    	$gen->save();
    	return redirect('/liatanak');
    }

    public function search(Request $r)
    {
    	$cari = $r->get('search');
    	$gen = GenBaru::where('nama','LIKE','%'.$cari.'%')->get();
    	return view('search',compact('gen'));
    }
    
    public function pilih($id) {
        $gen=GenBaru::where('id_genbaru',$id)->first();
        $user = Pengguna::where('id_user',session('key'))->value('nama');
        return view ('deskripsianak',compact('gen','user'));
    }

    public function latest()
    {
        $gen = DB::table('GenBaru')->orderBy('id_genbaru','desc')->take(3)->get();
        // dd($gen);
        return view('home', compact('gen'));
    }
}
