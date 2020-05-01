@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Mahasiswa</a></li>
        <li class="active">Tambah Mahasiswa</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="/mahasiswa/store" method="post" class="">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                                        <input type="text" id="nim" name="nim" placeholder="NIM"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="namamahasiswa" name="namamahasiswa" placeholder="Nama Mahasiswa"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                        <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" id="email" name="email" placeholder="Email" required="required" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Tambah</button></div>
                            </form>
                        </div>
                    </div>
        </div>

    <!-- /.content -->

    </div>
  <!-- /.content-wrapper -->
@endsection