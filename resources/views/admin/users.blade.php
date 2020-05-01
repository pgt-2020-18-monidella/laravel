@extends('admin.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil
        <small>User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil User</li>
      </ol>
    </section>

    <!-- content -->

    <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{ Auth::user()->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Since</b> <a class="pull-right">{{ Auth::user()->created_at }}</a>
                </li>
              </ul>

              <a href="{{url('/logout')}}" class="btn btn-primary btn-block"><b>Logout</b></a>
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.content -->

</div>
  <!-- /.content-wrapper -->
@endsection