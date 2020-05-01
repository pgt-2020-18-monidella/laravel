@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Mata Kuliah
        <small>Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Mata Kuliah</li>
      </ol>
    </section>

<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <a class="btn btn-success" href="/matakuliah/tambah"> + Tambah Mata Kuliah Baru</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Mata Kuliah</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>Semester</th>
                                            <th>SKS</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($matakuliah as $ds)
                                    <tr>
                                        <td>{{ $ds->kd_mk }}</td>
                                        <td>{{ $ds->mk }}</td>
                                        <td>{{ $ds->semester }}</td>
                                        <td>{{ $ds->sks }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/matakuliah/edit/{{ $ds->kd_mk }}">Edit</a>
                                        
                                            <a class="btn btn-danger" href="/matakuliah/hapus/{{ $ds->kd_mk }}">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



    
  </div>
  <!-- /.content-wrapper -->
@endsection