@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Mata Kuliah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Mata Kuliah</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            @foreach($matakuliah as $ds)
                            <form action="/matakuliah/update" method="post" class="">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $ds->kd_mk }}"> <br/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="mk" name="mk" value="{{ $ds->mk }}" placeholder="Nama Mata Kuliah"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                        <input type="text" id="semester" name="semester" value="{{ $ds->semester }}" placeholder="Semester"  required="required" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="sks" name="sks" value="{{ $ds->sks }}" placeholder="SKS" required="required" class="form-control">
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