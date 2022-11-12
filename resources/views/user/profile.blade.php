@extends('layouts.adminLte')
@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                <h3 class="card-title">Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ Auth::user()->foto }}" alt="error" width="200px" class="rounded"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ Auth::user()->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ Auth::user()->email }}</td>
                      </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col mt-2">
                        <a href="/updatePassword36" class="btn btn-primary">Update password</a>
                        @if (Auth::user()->detail_data == null)
                            @if (Auth::user()->is_aktif)
                            <a href="/createData36" class="btn btn-primary ">Lengkapi data</a>
                            @else
                            <a href="/createData36" class="btn btn-primary disabled">Lengkapi data</a>
                            <i>Menunggu persetujuan</i>
                            @endif
                        @else
                        <a href="/detailData36" class="btn btn-primary">Detail Data</a>
                        @endif
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
