@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Nilai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></i> Data Nilai</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- content -->
    <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body card-block">
                            @foreach($nilai as $ds)
                            <form action="/nilai/update" method="post" class="">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $ds->id }}"> <br/>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-edit"></i></div>
                                        <input type="text" id="nim" name="nim" value="{{ $ds->nim }}" placeholder="NIM"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="namamahasiswa" name="namamahasiswa" value="{{ $ds->namamahasiswa }}" placeholder="Nama Mahasiswa"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-archive"></i></div>
                                        <input type="text" id="mk" name="mk" value="{{ $ds->mk }}" placeholder="Mata Kuliah"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="tugas" name="tugas" value="{{ $ds->tugas }}" placeholder="Nilai Tugas"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="kuis" name="kuis" value="{{ $ds->kuis }}" placeholder="Nilai Kuis"  required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="uts" name="uts" value="{{ $ds->uts }}" placeholder="Nilai UTS"  required="required" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        <input type="text" id="uas" name="uas" value="{{ $ds->uas }}" placeholder="Nilai UAS" required="required" class="form-control">
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