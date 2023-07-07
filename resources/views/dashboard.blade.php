@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">


            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Selamat Datang</h3>

                    {{-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> --}}
                </div>
                <div class="card-body">
                    <h2> Hai  <b> {{ Auth::user()->name }}</b>, Apakabar? Tetap Semangat ya !!!</h2>
                </div>

                

                <div class="col-sm">

                    <a href="/keluarga" class="btn btn-app bg-warning">
                        <span class="badge bg-success">@currency($datas)</span>
                        <i class="fas fa-solid fa-coins"></i> Total Uang

                    </a>
                    <a href="/keluarga" class="btn btn-app bg-success">
                        <span class="badge bg-purple">{{ $jum }}</span>
                        <i class="fas fa-users"></i> Total Orang
                    </a>


                </div>
                
                <!-- /.card-body -->
                <div class="row">
                    <div class="col-12">
                      <!-- Custom Tabs -->
                      <div class="card">
                        <div class="card-header d-flex p-0">
                          <h3 class="card-title p-3"><i>Keunggulan Menggunakan Aplikasi ini</i></h3>
                          <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Export File</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Data Aman</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Hubungi Kami</a></li>
                            
                          </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                              <b>Anda dapat mengeksport file kumpul keluarga dalam bentuk EXCEL, PDF dan dapat di PRINT secara langsung</b>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                              <b>Data anda bisa anda akses kapan saja tanpa harus takut hilang</b>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                              <b>Farmy Setiawan - 082244946759</b>
                            </div>
                            <!-- /.tab-pane -->
                          </div>
                          <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                      </div>
                      <!-- ./card -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <!-- END CUSTOM TABS -->
                <div class="card-footer">
                    <marquee>Selamat Menikmati Kopi & Rokoknya...</marquee>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
