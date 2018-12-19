@extends('layouts.app')

@section('title')
	Edit Generasi Baru
@endsection

@section('content')
<div class="container">
<div class="logobig">
				<a href="/" style="cursor: pointer;"><img src="/image/logo3.png"></a>
			</div>
    <div class="column">
        <div class="column2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"><strong>DAFTAR GENERASI BARU</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="genbaruaction" method="post"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
                            <label for="ttl" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="ttl" type="date" class="form-control" name="ttl">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hobby') ? ' has-error' : '' }}">
                            <label for="hobby" class="col-md-4 control-label">Hobby</label>

                            <div class="col-md-6">
                                <input id="hobby" type="text" class="form-control" name="hobby">

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('citacita') ? ' has-error' : '' }}">
                            <label for="citacita" class="col-md-4 control-label">Cita-cita</label>

                            <div class="col-md-6">
                                <input id="citacita" type="text" class="form-control" name="citacita">

                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-4 control-label">Upload Foto</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto">

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi">

               
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection