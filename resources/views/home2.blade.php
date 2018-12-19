@extends('master2')

@section('title')
	Home
@endsection

@section('content')
	<div class="content">
		<div class="pic">
			<div class="logo"><img src="/image/logo2.png"></div>
			<div class="desc">
				<p>GenBahagia merupakan situs donasi<br>untuk anak-anak Indonesia yang<br>membutuhkan kehidupan yang lebih layak</p>
			</div>
		</div>
		<div class="option">
			<div class="cont">
				<a href="/liatanak">
					<div class="pilih">
						<h2>DONASI</h2>
						<h4>SEKARANG</h4>
					</div>
				</a>
				<a href="/generasibaru">
					<div class="pilih">
						<h2>GENERASI</h2>
						<h2>BARU</h2>
					</div>
				</a>
			</div>
		</div>
		<div class="view">
			<div class="logobig">
				<a style="cursor: pointer;"><img src="/image/logo3.png"></a>
			</div>
			<div class="katalog">
			@foreach($gen as $g)
			  <a href="/deskripsianak/{{ $g->id_genbaru }}"  class="baju">
			    <div class="anak" align="center">
			      <img src="{{ $g->foto }}" style="height:100%;">
			    </div>
			    <div class= "caption" style="text-align:center">
			      <div class="text">{{$g->nama}}<br><b>{{$g->ttl}}</b></div>
			    </div>
			  </a>
			 @endforeach
			</div>
		</div>
	</div>
@endsection