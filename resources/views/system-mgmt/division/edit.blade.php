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
                <div class="panel-heading"><b style="font-size: 20px;color:#AA0000">Chỉnh sửa đơn hàng của bạn</b>

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
                    <form action="{{url('editBill')}}/{{$bill->id}} " method="POST" name="myform" accept-charset="utf-8">
                              {!! csrf_field() !!}
                            <div class="col-md-4">

                                <div class="form-group">
                                <p>  <i class="fas fa-book-reader"></i>  <b style="color:#AA0000 ">Thông tin người gửi</b></p>
                                </div>

                                <div class="form-group">
                                    <label id="">Tên người gửi (*)</label>
                                    <input id="" type="name" name="bill_name" class="form-control" value="{{ $bill->bill_name }}" />
                                </div>
                               
                                <div class="form-group">
                                    <label id="">Số điện thoại (*)</label>
                                    <input id="" type="number" name="bill_number" class="form-control" value="{{ $bill->bill_number }}" />
                                </div>

                                <div class="form-group">
                                    <label id="resssssss" for="title">Chọn tỉnh thành</label>
                                     <select id="province" name="bill_province" class="form-control" style="height: 40px;" >
                                     <option value="" selected disabled>Chọn tỉnh thành</option>
                                      @foreach($bill_province as $province)
                                     <option @if(Auth::user()->province_users_name == $province->province_id) selected @endif value="{{$province->province_id}}">{{$province->province_name}}</option>
                                     @endforeach
                                     </select>
                              </div>

                              <div class="form-group">
                                     <label id="resssssss" for="title">Chọn quận huyện</label>
                                     <select name="bill_district" id="district" class="form-control">
                                     <option value="" selected disabled>Chọn quận huyện</option>
                                     </select>
                                     <input type="text" hidden id="district_donhang" value="{{Auth::user()->district_users_name}}">
                              </div>

                               <div class="form-group">
                                     <label id="resssssss" for="title">Chọn phường xã</label>
                                     <select name="bill_ward" id="ward" class="form-control">
                                     <option value="" selected disabled>Chọn phường xã</option>
                                     </select>
                                     <input type="text" hidden id="ward_donhang" value="{{Auth::user()->ward_users_name}}">
                              </div>

                              <div class="form-group">
                                    <label id="exciter">Địa chỉ (*)</label>
                                    <textarea name="bill_address" class="form-control" id="exampleFormControlTextarea1" rows="3">{{Auth::user()->user_address}}</textarea>
                                </div>


                                                                     
                                                      
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <p>  <i class="fas fa-book-reader"></i>  <b style="color:#AA0000 ">Dịch vụ</b></p>
                                </div>

                                <div class="form-group">
                                    <label id="">Kích thước (dài*rộng*cao/6000)</label>
                                    <div>
                                    <input style="width: 30%;float: left;" type="text" name="fst" class="form-control" />
                                    <input style="width: 40%; float: left;"  type="text" name="snd" class="form-control"  />
                                    <input style="width: 30%"  type="text" name="snss" class="form-control"  />

                                    <input  type="button" name="" value="Tổng KG (Gram) (*)" onclick="add()"><br><br>
                                    <input  type="text" id="bill_total" name="bill_total" class="form-control" value="{{ $people->bill_total }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label id="">Tên hàng hóa (*)</label>
                                    <input id="" type="name" name="bill_goods" class="form-control" value="{{ $people->bill_goods }}" />
                                </div>

                                <div class="form-group">
                                    <label id="exciter">Hình thức giao hàng (*)</label><br>
                                    <input type="radio" name="bill_form" value="{{$people->bill_form}}"> Người nhận
                                    <input type="radio" name="bill_form" value="{{$people->bill_form}}"> Người gửi
                                </div>

                                <div class="form-group">
                                    <label id="">Tiền cod</label>
                                    <input type="text" name="bill_cod" class="form-control audi" value="{{$people->bill_cod}}" />
                                </div>

                                <div class="form-group">
                                    <label >Tiền ứng</label>
                                    <input type="text" name="bill_ung" id="fromValue" class="form-control audi" value="{{$people->bill_ung}}" />
                                </div>

                                <div class="form-group">
                                    <label >Cước phí dịch vụ ứng (%)</label>
                                    <input id="toValue" type="number" name="bill_dichvuung" class="form-control audi" value="{{$people->bill_dichvuung}}" />
                                </div>

                                <div class="form-group">
                                    <label id="">Mã giảm giá</label>
                                    <input id="" type="name" name="bill_giamgia" class="form-control" value="{{$people->bill_giamgia}}" />
                                </div>   

                                <div class="form-group">
                                    <label id="exciter">Ngày lấy hàng (*)</label>
                                    <input style="width: 100%" type="date" name="bill_date" value="" />
                                </div> 

                              

                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <p>  <i class="fas fa-book-reader"></i>  <b style="color:#AA0000 ">Thông tin người nhận</b></p>
                                </div>

                                <div class="form-group">
                                    <label id="">Tên người nhận (*)</label>
                                    <input id="" type="name" name="bill_name_people" class="form-control" value="{{$people->bill_name_people}}" />
                                </div>

                                 <div class="form-group">
                                    <label id="">Số điện thoại người nhận (*)</label>
                                    <input id="" type="number" name="bill_number_people" class="form-control" value="{{$people->bill_number_people}}" />
                                </div>

                                <div class="form-group">
                                    <label id="pickuplabel" for="title">Chọn tỉnh thành (*)</label>
                                    <select id="provinces" name="bill_province_people" class="form-control" value="">
                                    <option value="" selected disabled >Chọn tỉnh thành</option>
                                    @foreach($bill_province as $province)
                                    <option @if($people->bill_province_people == $province->province_id) selected @endif value="{{$province->province_id}}">{{$province->province_name}}</option>
                                    @endforeach      
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label id="pickuplabel" for="title">Chọn quận huyện (*)</label>
                                    <select id="districts" name="bill_district_people" class="form-control">
                                    <option value="" selected disabled >Chọn quận huyện</option>
                                    </select>
                                    <input type="text" hidden id="district_donhang" value="{{$people->bill_district_people}}">
                                </div>

                                <div class="form-group">
                                    <label id="pickuplabel" for="title">Chọn phường xã (*)</label>
                                    <select id="wards" name="bill_ward_people" class="form-control">
                                    <option value="" selected="" >Chọn phường xã</option>  
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label id="exciter">Địa chỉ</label>
                                    <textarea name="bill_address_people" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$people->bill_address_people}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label id="exciter">Ghi chú</label>
                                    <textarea name="bill_note" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$people->bill_note}}</textarea>
                                </div> 

                                <div class="form-group">
                                    <label id="">Cước dịch vụ</label>
                                    <input type="text" name="bill_money" class="form-control audi" value="{{$people->bill_money}}" />
                                </div>  

                                <div class="form-group">
                                    <label id="">Tổng cước đơn hàng </label>
                                    <!-- <input name="sumofaudi" id="sumofaudi" type="text" value=""> -->
                                     <input id="sumofaudi" type="text" name="bill_sum" class="form-control" value="{{$people->bill_sum}}" />
                                </div>   
                              
                            </div>
                
                            <div class="form-group">
                                <div style="float: right;" class="col-md-2 col-md-offset-8">
                                    <button type="submit" class="btn btn-primary">
                                    Sửa đơn hàng
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/bill_country_edit.js') }}"></script>
<script src="{{ asset('js/load-price.js') }}"></script>
<script src="{{ asset('js/bill-goods-ward.js') }}"></script>
<!-- <script type="text/javascript">

</script> -->
@endsection


