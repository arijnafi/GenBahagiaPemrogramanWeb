
@extends('layouts.app')

@section('title')
    Halaman Daftar
@endsection

@section('content')
<div class="header">
    <div class="dropdown" style="float: right; margin-right: 50px;">
      <button class="dropbtn">Hi, {{ $user }}!</button>
      <div class="dropdown-content">
        <a href="/logout">Logout</a>
      </div>
    </div>
    <a href="/" class="bar">Home</a>
</div>
<div class="container">
    <div class="column">
        <div class="column2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="regist">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">Nomor HP</label>

                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{ old('hp') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
                            <label for="ttl" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="ttl" type="date" class="form-control" name="ttl" value="{{ old('ttl') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Change Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
