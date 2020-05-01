@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Mahasiswa</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            @foreach($mahasiswa as $ds)
                            <form action="/mahasiswa/update" method="post" class="">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $ds->nim }}"> <br/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="namamahasiswa" name="namamahasiswa" value="{{ $ds->namamahasiswa }}" placeholder="Nama Mahasiswa"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                        <input type="text" id="jurusan" name="jurusan" value="{{ $ds->jurusan }}" placeholder="Jurusan"  required="required" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input type="email" id="email" name="email" value="{{ $ds->email }}" placeholder="Email" required="required" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Simpan Data</button></div>
                            </form>
                            @endforeach
                        </div>
                    </div>
        </div>

    <!-- /.content -->

    </div>
  <!-- /.content-wrapper -->
@endsection