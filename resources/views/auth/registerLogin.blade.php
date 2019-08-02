@extends('layouts.app')

@section('content')
<div class="container">
    <div style="background: #AAAAAA" class="row">
        <div style="background: #cccccc" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đăng ký</div>
                <div class="panel-body">

                @if(count($errors)>0)
                <ul>
                  @foreach($errors->all() as $error)
                  <li class="alert alert-danger">{{$error}}</li>
                  @endforeach
                </ul>
                @endif

                @if(session('dangkynhanh'))
                 <div class="alert alert-success">
                    {{ session('dangkynhanh') }}
                 </div>
                @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{route('vdtexprss_PostRegistersss')}}">
                        {{ csrf_field() }}
                            
                            <label  class="col-md-4 control-label">Tên đăng nhập :</label>
                                
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" >
                            </div>

                            </br>
                            </br>

                             <label  class="col-md-4 control-label">Số điện thoại :</label>
                                
                            <div class="col-md-6">
                                <input id="users_number" type="number" class="form-control" name="users_number" >
                            </div>

                            </br>
                            </br>

                       
                            <label class="col-md-4 control-label">Email :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" >
                            </div>
                            
                            </br>
                            </br>

                            <label class="col-md-4 control-label">Họ :</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" >
                            </div>

                            </br>
                            </br>
                            
                             <label class="col-md-4 control-label">Tên :</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" >
                            </div>

                            </br>
                            </br>

                            <label class="col-md-4 control-label">Mật khẩu :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                            </div>

                            </br>
                            </br>

                            <label style="display: none" for="password" class="col-md-4 control-label">type :</label>

                            <div style="display: none" class="col-md-6">
                                <input id="type" type="text" class="form-control" name="tpye" value="3" >

                            </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" class="btn btn-primary" value="Tạo khách hàng" />

                              <!--   <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Lấy lại mật khẩu
                                </a> -->
                                  <a class="btn btn-link" href="/login">
                                    Đăng nhập
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
