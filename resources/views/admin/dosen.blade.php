@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Dosen
        <small>Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Dosen</li>
      </ol>
    </section>

<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <a class="btn btn-success" href="/dosen/tambah"> + Tambah Dosen Baru</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Dosen</th>
                                            <th>Nama</th>
                                            <th>Mata Kuliah</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($dosen as $ds)
                                    <tr>
                                        <td>{{ $ds->kd_dosen }}</td>
                                        <td>{{ $ds->namadosen }}</td>
                                        <td>{{ $ds->mk }}</td>
                                        <td>{{ $ds->alamat }}</td>
                                        <td>{{ $ds->email }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/dosen/edit/{{ $ds->kd_dosen }}">Edit</a>
                                        
                                            <a class="btn btn-danger" href="/dosen/hapus/{{ $ds->kd_dosen }}">Hapus</a>
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