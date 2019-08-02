@extends('layouts.app')

@section('content')
<div class="container">
    <div style="background: #AAAAAA" class="row">
        <div style="background: #cccccc" class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đăng nhập</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Số điện thoại :</label>

                            <div class="col-md-6">
                                <input id="users_number" type="text" class="form-control" name="users_number" value="{{ old('users_number') }}" required autofocus>

                                @if ($errors->has('users_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('users_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu :</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lưu mật khẩu
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Đăng nhập
                                </button>

                              <!--   <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Lấy lại mật khẩu
                                </a> -->
                                  <a class="btn btn-link" href="{{route('vdtexprss_GetRegister')}}">
                                    Đăng ký
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
