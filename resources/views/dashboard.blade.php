@extends('layouts.adminLte')
@section('content')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- /.content-header -->
      <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Info</h3>

                <p>Profile</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/profile36" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <section class="content pb-3">
      <div class="container-fluid h-100">
        <div class="card card-row card-secondary">
          <div class="card-header">
            <h3 class="card-title">
              Tugas TIB
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title">Tugas Minggu Ini</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#3</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                  <label for="customCheckbox1" class="custom-control-label">Interaksi Manusia Komputer</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox2" d>
                  <label for="customCheckbox2" class="custom-control-label">Pemrograman Backend</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                  <label for="customCheckbox3" class="custom-control-label">Pemrograman Frontend</label>
                </div>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Tugas Minggu Depan</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#2</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1_1" >
                  <label for="customCheckbox1_1" class="custom-control-label">Sistem Keamanan Data</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" >
                  <label for="customCheckbox1_2" class="custom-control-label">Manajemen Proyek dan Teknologi Informasi</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-row card-success">
          <div class="card-header">
            <h3 class="card-title">
              Done
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Praktik Interaksi Manusia Komputer</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#1</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </section>
@endsection
