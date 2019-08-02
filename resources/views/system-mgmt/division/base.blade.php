@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b style="color: #AA0000">VDTexpress</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i> Danh mục đơn hàng</a></li>
        <li class="active">Đơn hàng</li>
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection