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
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                       {{ $message }}
                      </div>
                    @endif
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 10px">#</th>
                        <th class="text-center">Photo</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center"><img src="img/{{ $user->foto }}" alt="" srcset="" alt="error" width="100px"></td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">
                                @if ($user->is_aktif)
                                @if($user->detail_data==null)
                                <a href="#" class="btn btn-primary" onclick="alert('User belum melengkapi data')">Detail</a>
                                @else
                                <a href="/detailUser36/{{ $user->id }}" class="btn btn-primary">Detail</a>
                                @endif
                                <a href="/unapproveUser36/{{ $user->id }}" class="btn btn-danger">Un Approve</a>
                                @else
                                <a href="/approveUser36/{{ $user->id }}" class="btn btn-success">Approve</a> 
                                <a href="/deleteUser36/{{ $user->id }}" class="btn btn-danger">Denied</a>
                                @endif
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

    </div>
  </section>

@endsection
