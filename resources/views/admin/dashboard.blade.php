@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Welcome!!!</b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        Selamat datang kepada <b>{{ Auth::user()->name }}</b>.<br>
        Terima kasih sudah bersedia mampir di website sederhana ini. Minta tolong banget ini ya jangan dihujat.<br>
        Selamat menikmati!!!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Tertanda,
          Moni Cantik.
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    
  </div>
  <!-- /.content-wrapper -->
  @endsection