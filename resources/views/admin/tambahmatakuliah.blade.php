@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Mata Kuliah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Mata Kuliah</a></li>
        <li class="active">Tambah Mata Kuliah</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="/matakuliah/store" method="post" class="">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                                        <input type="text" id="kd_mk" name="kd_mk" placeholder="Kode Mata Kuliah"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="mk" name="mk" placeholder="Nama Mata Kuliah"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                        <input type="text" id="semester" name="semester" placeholder="Semester"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="sks" name="sks" placeholder="SKS" required="required" class="form-control">
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