@extends('layouts.adminLte_login')
@section('content')
<div class="register-box">
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
      <img src="/img/logo.png" alt="logo" width="80px">
        <a href="/" class="h1"><b>Update</b>Password</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Update Password Disini</p>

        <form action="/updatePasswordProses36/{{ Auth::user()->id }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password baru" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div class="col">
              <button type="submit" class="btn btn-primary">Update password</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
          <a href="/profile36" class="btn btn-block btn-danger mb-2">
            Kembali
          </a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
