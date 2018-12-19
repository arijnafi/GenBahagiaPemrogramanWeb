@extends('layouts.app')
@section('title')
	Summary
@endsection

@section('content')
<div class="header">
    <div>
        <span>
            <div class="srch">  
            </div>
        </span>
        <input type="text" class="cari" name="search" placeholder="cari nama anak">
    </div>
    <a href="/logout" class="bar"><strong>LOGOUT</strong></a>
    <a href="/" class="bar"><strong>HOME</strong></a>
</div>
<div class="container">
	<div class="logobig">
		<a href="/" style="cursor: pointer;"><img src="/image/logo3.png"></a>
	</div>
	<div class="form-validation" style="margin-bottom: 100px;">
        <!-- You only need this form and the form-validation.css -->
        @foreach($bayar as $b)
            <div class="form-title-row">
                <h1>Ringkasan Donasi Anda:</h1>
            </div>
            <div class="form-title-row">
                <label>
                    <span>ID Donasi</span>
                    <h2>00{{ $b->id_donasi }}</h2>
                </label>
            </div>

            <div class="form-title-row">
                <label>
                    <span>Nominal Donasi</span>
                    <h2>Rp. {{ $b->nominal }}</h2>
                </label>
            </div>
            <div class="form-title-row">
                <label>
                    <span>Kode unik (akan didonasikan)</span>
                    <h2>00{{ $b->id_donasi }}</h2>
                </label>
            </div>
            
            <div class="form-title-row">
                <label>
                    <span><b>Total</b></span>
                    <h2>Rp. {{ $b->nominal + $b->id_donasi }},-</h2>
                </label>
            </div>
            
            <div class="form-title-row">
                <label>
                    <h3>Silahkan transfer ke:</h3>
                    <p>{{ $b->nama_rek }}<br>Cabang: Plaza Pondok Gede<br>No. Rekening: {{ $b->no_rek }} <br>Atas nama: YAYASAN KITA BISA<br>
					</p>
                </label>
            </div>
        @endforeach
    </div>
</div>
@endsection