@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Nilai
        <small>Master</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Nilai</li>
      </ol>
    </section>

<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <a class="btn btn-success" href="/nilai/tambah"> + Tambah Nilai</a>
                           <!-- <div class="col-md-4" style="align: right;">
                            <form action="/nilai/search" method="get">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Nama">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-success"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            </div>-->
                            </div>
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Mata Kuliah</th>
                                            <th>Tugas</th>
                                            <th>Kuis</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach($nilai as $ds)
                                    <tr>
                                        <td>{{ $ds->nim }}</td>
                                        <td>{{ $ds->namamahasiswa }}</td>
                                        <td>{{ $ds->mk }}</td>
                                        <td>{{ $ds->tugas }}</td>
                                        <td>{{ $ds->kuis }}</td>
                                        <td>{{ $ds->uts }}</td>
                                        <td>{{ $ds->uas }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="/nilai/edit/{{ $ds->id }}">Edit</a>
                                        
                                            <a class="btn btn-danger" href="/nilai/hapus/{{ $ds->id }}">Hapus</a>
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