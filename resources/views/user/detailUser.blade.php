@extends('layouts.adminLte')
@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Detail User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr class="text-center">
                        <th colspan="2"><img src="/img/{{ $user->foto }}" alt="error" width="200px" class="rounded"></th>
                      </tr>
                      <tr>
                        <th style="width: 50%">Nama lengkap</th>
                        <td style="width: 50%">{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        @if ($user->detail_data->alamat == null)
                        <td><i>(belum diisi)</i></td>
                        @else
                        <td>{{ $user->detail_data->alamat }}</td>
                        @endif
                      </tr>
                      <tr>
                        <th>Agama</th>
                        @if ($user->detail_data->agama == null)
                        <td><i>(belum diisi)</i></td>
                        @else
                        <td>{{ $user->detail_data->agama->nama_agama }}</td>
                        @endif
                      </tr>
                      <tr>
                        <th>Umur</th>
                        @if ($user->detail_data->umur == null)
                        <td><i>(belum diisi)</i></td>
                        @else
                        <td>{{ $user->detail_data->umur }} tahun</td>
                        @endif
                      </tr>
                      <tr>
                        <th>Tempat lahir</th>
                        @if ($user->detail_data->tempat_lahir == null)
                        <td><i>(empty)</i></td>
                        @else
                        <td>{{ $user->detail_data->tempat_lahir }}</td>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <a href="/deleteUser36/{{ $user->id }}" class="btn btn-danger">Hapus</a>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
