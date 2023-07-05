@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row ml-10">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="ribbon-wrapper">
                                <div class="ribbon bg-danger">
                                    Input Data
                                </div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">Input Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('keluarga.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $post->nama) }}" placeholder="Masukkan Nama">

                                        <!-- error message untuk title -->
                                        @error('nama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Jumlah</label>

                                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $post->jumlah) }}" placeholder="Masukkan Jumlah">
                                        <!-- error message untuk title -->
                                        @error('jumlah')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                    <button type="reset" class="btn btn-warning">RESET</button>

                                </div>
                            </form>
                        </div>
                        <!-- /.card -->





                    </div>
                    <!--/.col (left) -->
                </div>
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
