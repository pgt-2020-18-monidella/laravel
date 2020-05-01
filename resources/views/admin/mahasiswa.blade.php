@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>

<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <a class="btn btn-success" href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Jurusan</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($mahasiswa as $ds)
                                    <tr>
                                        <td>{{ $ds->nim }}</td>
                                        <td>{{ $ds->namamahasiswa }}</td>
                                        <td>{{ $ds->jurusan }}</td>
                                        <td>{{ $ds->email }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/mahasiswa/edit/{{ $ds->nim }}">Edit</a>
                                        
                                            <a class="btn btn-danger" href="/mahasiswa/hapus/{{ $ds->nim }}">Hapus</a>
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