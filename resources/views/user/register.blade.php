@extends('layouts.adminLte_login')
@section('content')
<div class="register-box">
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
      <img src="/img/logo.png" alt="logo" width="80px">
        <a href="/" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register Sekarang!</p>

        <form action="/registerProses36" method="post" enctype="multipart/form-data">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" required>
                <label class="custom-file-label" for="exampleInputFile">Foto profile</label>
            </div>
          </div>
          <div class="row justify-content-center">
          <div class="col text-center">
          <div class="form group">
        <button type="submit" class="btn btn-danger rounded submit p-2 px-5">Register</button>
        </div>
          </div>
        </div>
        </form>

        <div class="social-auth-links text-center">
          <a href="/login36" class="btn btn-block btn-primary">
            Kembali
          </a>
        </div>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
