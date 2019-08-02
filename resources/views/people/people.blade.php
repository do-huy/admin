@extends('system-mgmt.division.base')

@section('action-content')
<head>
    <script src="https://kit.fontawesome.com/b818a1b9ee.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b style="font-size: 20px;color:#AA0000">Cập nhập thông tin tài khoản</b>

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
                
                @if(count($errors)>0)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}</li>
                        @endforeach
                    </ul>
               @endif

                </div>
                <div class="panel-body">
                    <form action="/add/people/{{$editpeople->id}}" method="POST" name="myform" accept-charset="utf-8">
                              {!! csrf_field() !!}
                              <div class="col-md-12">
                                <div class="form-group">
                                <p>  <i class="fas fa-book-reader"></i>  <b style="color:#AA0000 ">Thông tin tài khoản</b></p>
                              </div>

                              <div class="form-group">
                                    <label >Tên chủ tài khoản</label>
                                    <input type="text" name="username" class="form-control" value="{{ Auth::user()->username }}" />
                              </div>

                              <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="number" name="users_number" class="form-control" value="{{ Auth::user()->users_number }}" />
                              </div>
                                
                              <div class="form-group">
                                    <label id="resssssss" for="title">Chọn tỉnh thành</label>
                                     <select id="province" name="province_users_name" class="form-control" style="height: 40px;" >
                                     <option value="" selected disabled>Chọn tỉnh thành</option>
                                      @foreach($province_donhang as $province)
                                     <option @if(Auth::user()->province_users_name == $province->province_id) selected @endif value="{{$province->province_id}}">{{$province->province_name}}</option>
                                     @endforeach
                                     </select>
                              </div>
                               
                              <div class="form-group">
                                     <label id="resssssss" for="title">Chọn quận huyện</label>
                                     <select name="district_users_name" id="district" class="form-control">
                                     <option value="" selected disabled>Chọn quận huyện</option>
                                     </select>
                                     <input type="text" hidden id="district_donhang" value="{{Auth::user()->district_users_name}}">
                              </div>

                              <div class="form-group">
                                     <label id="resssssss" for="title">Chọn phường xã</label>
                                     <select name="ward_users_name" id="ward" class="form-control">
                                     <option value="" selected disabled>Chọn phường xã</option>
                                     </select>
                                     <input type="text" hidden id="ward_donhang" value="{{Auth::user()->ward_users_name}}">
                              </div>

                              <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="user_address" class="form-control" value="{{ Auth::user()->user_address }}" />
                              </div>

                               <div class="form-group">
                                    <label>Số tài khoản</label>
                                    <input type="text" name="user_account_number" class="form-control" value="{{ Auth::user()->user_account_number }}" />
                              </div>
                                                      
                            </div>
                            
                        <div class="form-group">
                            <div style="float: right;" class="col-md-2 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    Cập nhập
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){

      $('#province').on('change', function() {
     
          var province_listID = $(this).val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="district_users_name"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="district_users_name"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      });

       if($('#province').val()) {
     
          var province_listID = $('#province').val();
          if(province_listID) {
              $.ajax({
                  url: '/get-state-list/'+province_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="district_users_name"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="district_users_name"]').append('<option value="'+ data['district_id'] +'">'+ data['district_name'] +'</option>');
                      });
                       if($('#district').val()) {
                          var districtDonhang = $('input#district_donhang').val();
                          $('#district').val(districtDonhang);

                          var district_listID = $('#district').val();
                          if(district_listID) {
                              $.ajax({
                                  url: '/get-ward-list/'+district_listID,
                                  type: "GET",
                                  dataType: "json",
                                  success:function(data) {                      
                                      $('select[name="ward_users_name"]').empty();
                                      $.each(data, function(key, data) {
                                          $('select[name="ward_users_name"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                                      });

                                  }
                              });
                          }else{
                              $('select[name="ward"]').empty();
                          }
    
                          var wardDonhang = $('input#ward_donhang').val();
                          $('#ward').val(wardDonhang);
                      };
                  }
              });
          }else{
              $('select[name="district"]').empty();
          }
      };

      $('#district').on('change', function() {
      
          var district_listID = $(this).val();
          if(district_listID) {
              $.ajax({
                  url: '/get-ward-list/'+district_listID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="ward_users_name"]').empty();
                      $.each(data, function(key, data) {
                          $('select[name="ward_users_name"]').append('<option value="'+ data['ward_id'] +'">'+ data['ward_name'] +'</option>');
                      });

                  }
              });
          }else{
              $('select[name="ward"]').empty();
          }
      });

  });

</script>
@endsection



