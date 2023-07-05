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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    Hay User {{ Auth::user()->name }}
                </div>
                <div class="col-sm">

                    <a class="btn btn-app bg-warning">
                        <span class="badge bg-success">@currency($datas)</span>
                        <i class="fas fa-solid fa-coins"></i> Total Uang

                    </a>
                    <a class="btn btn-app bg-success">
                        <span class="badge bg-purple">{{ $jum }}</span>
                        <i class="fas fa-users"></i> Total Orang
                    </a>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <marquee>Selamat Menikmati</marquee>
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection
