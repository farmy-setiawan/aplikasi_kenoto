@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Keluarga <b>{{ Auth::user()->name}}</b></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Input Data Keluarga</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3> @currency($datas) </h3>

                                        <p>Total yang terkumpul</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{ $jum }}</h3>

                                        <p>Total Jumlah Orang</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">Data Kumpul Keluarga</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <a href="{{ route('keluarga.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jumlah (Rp)</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proposal as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><b>{{ $d->nama }}</b></td>
                                                <td>@currency($d->jumlah)</td>
                                                <td>
                                                  <div class="d-grid gap-2 col-6 mx-auto">
                                                    <a href="{{ route('keluarga.edit', $d->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i>
                                                        Edit</a>
                                                    <a href="" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i> Hapus</a>
                                                  </div>
                                                </td>

                                            </tr> 
                                        @endforeach
                                      {{-- <tfoot> 
                                        <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Jumlah (Rp)</th>
                                          <th>Aksi</th>

                                      </tr>
                                      </tfoot> --}}
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection