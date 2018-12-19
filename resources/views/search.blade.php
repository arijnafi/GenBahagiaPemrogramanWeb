@extends('master2') 

@section('title') 
	Cari Anak 
@endsection 

@section('content') 
<div class="view" style="background-color: #C9CACA;"> 
	<div class="logobig"> 
		<a href="/" style="cursor: pointer;"><img src="/image/logo3.png"></a> 
	</div> 

	<div class="katalog"> 
	@if($gen->count()) 
		@foreach($gen as $g) 
		<a href="/deskripsianak/{{ $g->id_genbaru }}" class="baju"> 
			<div class="anak" align="center"> 
				<img src="{{ $g->foto }}" style="height:100%;"> 
			</div> 
			<div class= "caption" style="text-align:center"> 
				<div class="text">{{$g->nama}}<br><b>{{$g->ttl}}</b></div> 
			</div> 
		</a> 
		@endforeach 
	@else 
		<div class="warn"> 
			<p>Data anak tidak ditemukan.</p> 
		</div> 
	@endif 
</div> 
@endsection