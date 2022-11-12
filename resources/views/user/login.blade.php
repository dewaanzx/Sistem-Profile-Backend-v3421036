@extends('layouts.adminLte_login')
@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-danger">
      <div class="card-header text-center">
        <img src="/img/logo.png" alt="logo" width="80px">
        <a href="../../index2.html" class="h1"><b>LOGIN</b> HERE</a>
      </div>
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Error</h5>
                       {{ $message }}
                      </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-primary alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                       {{ $message }}
                      </div>
                    @endif
      <div class="card-body">
        <p class="login-box-msg">Sudah memiliki akun?</p>

        <form action="/loginProses36" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-danger">Remember Me
									  <input type="checkbox" unchecked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="/register36">Register Disini</a>
								</div>
	            </div>

        <div class="row justify-content-center">
          <div class="col text-center">
          <div class="form group">
        <button type="submit" class="btn btn-danger rounded submit p-2 px-5">Log In</button>
        </div>
          </div>
        </div>
        
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection
