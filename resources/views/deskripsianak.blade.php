@extends('master2')
@section('title')
	Deskripsi
@endsection

@section('content')
	<div class="container" style="float: left;">
		<div class="view2">
			<div class="logobig" style="margin-left: 200px;">
				<a style="cursor: pointer;;" href="/"><img src="/image/logo3.png" style="width: 250px;"></a>
			</div>
			@if($gen->user_id == session('key'))
			<div>
				<div>
					<div class="anak2" style="margin-left: 200px;" align="center">
						<img src="/{{$gen->foto}}" style="height: 100%;">
					</div>
					<div class="cont" style="margin-left: 250px; margin-top: 50px;">
						<a href="/donasi">
							<div class="pilih">
								<h2>DONASI</h2>
								<h3>SEKARANG</h3>
							</div>
						</a>
						<a href="/editanak">
							<div class="pilih">
								<h2>EDIT</h2>
								<h3>DATA</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
			@else
			<div>
				<div>
					<div class="anak2" style="margin-left: 200px;" align="center">
						<img src="/{{$gen->foto}}" style="height: 100%;">
					</div>
					<div class="cont" style="margin-left: 250px; margin-top:50px;">
						<a href="/donasi">
							<div class="pilih">
								<h2>DONASI</h2>
								<h3>SEKARANG</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
			@endif
		</div>
		<div class="paragraf" align="center">
			<span>
				<b style="margin-top: 80px;">Nama: </b>
				<p class="text" style="font-size: 25px; ">{{$gen->nama}}</p><br>
				<b>Tanggal Lahir: </b><p>{{$gen->ttl}}</p><br>
				<b>Alamat: </b><p>{{$gen->alamat}}</p><br>
				<b>Contact Person: </b><p>{{$gen->hobby}}</p><br>
				<b>Status: </b><p>{{$gen->citacita}}</p><br>
				<b>Tentang {{$gen->nama}}: </b><p>{{$gen->deskripsi}}</p><br>
			</span>
		</div>
	</div>
		
@endsection

