@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Nilai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Nilai</a></li>
        <li class="active">Tambah Nilai</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action="/nilai/store" method="post" class="">
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
                                        <input type="text" id="mk" name="mk" placeholder="Nama Mata Kuliah"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="tugas" name="tugas" placeholder="Nilai Tugas"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="kuis" name="kuis" placeholder="Nilai Kuis"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="uts" name="uts" placeholder="Nilai UTS"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="uas" name="uas" placeholder="Nilai UAS" required="required" class="form-control">
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