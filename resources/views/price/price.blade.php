@extends('templade.master')
@section('content')
<div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slide.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span style="color: red"><b>VẬN ĐỨC THÀNH</b></span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p style="color: #AA0000">Phương châm làm việc uy tín , chất lượng , hiệu quả , luôn nghĩ cho khách hàng</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Tạo đơn chành xe</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Giao toàn quốc</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/slide.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                 <h2><span style="color: red"><b>VẬN ĐỨC THÀNH</b></span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p style="color: #AA0000">Xử lý đơn hàng hết mình , giao hàng hết sức</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Tạo đơn chành xe</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Giao toàn quốc</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/slide.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                 <h2><span style="color: red"><b>VẬN ĐỨC THÀNH</b></span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p style="color: #AA0000">Là nơi để khách hàng đặt niềm tin</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Tạo đơn chành xe</button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Giao toàn quốc</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->






<div class="container">
  <h2 id="lele">DỊCH VỤ ỨNG TIỀN</h2>       
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Số tiền</th>
        <th>Phí ứng</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dưới 500,000đ</td>
        <td>Miễn phí</td>

      
      </tr>
      <tr>
        <td>Từ 500,000 - 1,000,000đ</td>
        <td>5,000đ</td>
      
      </tr>
      <tr>
        <td>Từ 1,000,000 - 2,000,000đ</td>
        <td>10,000đ</td>
      
      </tr>
       <tr>
        <td>Từ 2,000,000đ trở lên</td>
        <td>Số tiền x 0.5%</td>
      
      </tr>

    </tbody>
  </table>

  <p id="bhghg">Ghi chú : Dịch vụ ứng tiền chỉ áp dụng cho Khách hàng Thân thiết hoặc có bảo lãnh của bên thứ 3 có giao dịch với VDTexpress</p>
</div>
<div class="container">
  <img id="bkt" src="{{asset('img/footerimg.png')}}" alt="">
</div>

 <div class="container">
  <h2 id="lele">CÁC KHU VỰC GIAO HÀNG TẬN NƠI</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Khu vực</th>
        <th>Đức Huệ</th>
        <th>Đức Hòa</th>
        <th>Bến Lức</th>
        <th>Hồ Chí Minh</th>     
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Trung tâm</td>
        <td>T.T Đông Thành , T.T Hiệp Hòa</td>
        <td>T.T Hậu Nghĩa , T.T Đức Hòa</td>
         <td> T.T Bến Lức</td>
        <td>Quận 1 , 3 , 5 , 10 ,11</td>
      
      </tr>
      <tr>
        <td>Vùng 1</td>
        <td>Mỹ Thạnh Đông , Bình Hòa Bắc , Bình Hòa Nam , Mỹ Thạnh Bắc</td>
        <td>Hiệp Hòa , Tân Mỹ , Tân Phú , Đức Hòa Hạ , Đức Hòa Đông , Đức Hòa Thượng , Đức Lập Hạ , Đức Lập Thượng , Hòa Khánh Đông , Hòa Khánh Nam , Hòa Khánh Tây</td>
         <td>An Thạnh , Lương Bình , Lương Hòa , Thanh Phú , Long Hiệp , Nhựt Chánh , Thạnh Đức , Mỹ Yên , Phước Lợi </td>
        <td>Quận 4 , 6 , 7 , 8 , Bình Thạnh , Phú Nhuận , Gò Vấp , Tân Phú , Tân Bình</td>
      
      </tr>
      <tr>
        <td>Vùng 2</td>
        <td>Bình Hòa Hưng , Bình Thành , Mỹ Bình , Mỹ Qúy Tây , Mỹ Qúy Đông , Mỹ Thạnh Tây</td>
        <td>An Ninh Đông , An Ninh Tây , Hựu Thạnh , Lộc Giang , Mỹ Hạnh Bắc , Mỹ Hạnh Nam</td>
         <td>Bình Đức , Tân Bửu , Tân Hòa , Thạnh Hóa , Thạnh Lợi</td>
        <td>Quận 2 , 9 , 12 , Thủ Đức , Bình Tân , Hóc Môn , Bình Chánh , Nhà Bè</td>
      
      </tr>
    </tbody>
  </table>
</div>
<div class="container">
  <img id="footerimg" src="{{asset('images/footerimg.png')}}" alt="">
</div>

<div class="container">
  <h2 id="lele">BẢNG GIÁ GIAO NHẬN TẬN NƠI LIÊN HUYỆN VÀ NỘI THÀNH TP.HCM</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>20,000đ</td>
        <td>25,000đ</td>
        <td>30,000đ</td>
        <td>25,000đ</td>
        <td>30,000đ</td>
        <td>35,000đ</td>
        <td>30,000đ</td>
        <td>35,000đ</td>
        <td>40,000đ</td>
      </tr>
      <tr>
       <td>Lây sáng giao chiều , lấy chiều giao sáng</td>
        <td>Lấy sáng giao chiều , lấy chiều giao qua ngày</td>
        <td>Lấy sáng , chiều và giao qua ngày</td>
        <td>Lấy trong ngày , giao sáng</td>
        <td>Lấy trong ngày , giao qua ngày</td>
        <td>Lấy trong ngày và giao 1-2 ngày</td>
        <td>Lấy qua ngày , giao sáng hôm sau</td>
        <td>Lấy qua ngày , giao trong ngày hôm sau</td>
        <td>Lấy qua ngày , giao 1-2 ngày</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <img id="footerimg" src="{{asset('images/footerimg.png')}}" alt="">
</div>

<div class="container">
  <h2 id="lele">BẢNG GIÁ GIAO NHẬN TẬN NƠI LONG AN ĐI HCM VÀ NGƯỢC LẠI ÁP DỤNG CHO CÁC HUYỆN ĐỨC HUỆ , ĐỨC HÒA , BẾN LỨC , TÂN AN</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>30,000đ</td>
        <td>35,000đ</td>
        <td>40,000đ</td>
        <td>35,000đ</td>
        <td>40,000đ</td>
        <td>45,000đ</td>
        <td>40,000đ</td>
        <td>45,000đ</td>
        <td>50,000đ</td>
      </tr>
      <tr>
       <td>Lây sáng giao chiều , lấy chiều giao sáng</td>
        <td>Lấy sáng giao chiều , lấy chiều giao qua ngày</td>
        <td>Lấy sáng , chiều và giao qua ngày</td>
        <td>Lấy trong ngày , giao sáng</td>
        <td>Lấy trong ngày , giao qua ngày</td>
        <td>Lấy trong ngày và giao 1-2 ngày</td>
        <td>Lấy qua ngày , giao sáng hôm sau</td>
        <td>Lấy qua ngày , giao trong ngày hôm sau</td>
        <td>Lấy qua ngày , giao 1-2 ngày</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <img id="footerimg" src="{{asset('images/footerimg.png')}}" alt="">
</div>

<div class="container">
  <h2 id="lele">BẢNG GIÁ GIAO NHẬN NỘI HUYỆN ĐỨC HUỆ , ĐỨC HÒA , BẾN LỨC</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
         <th>Trung tâm</th>
        <th>Vùng 1</th>
        <th>Vùng 2</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>15,000đ</td>
        <td>20,000đ</td>
        <td>25,000đ</td>
        <td>20,000đ</td>
        <td>25,000đ</td>
        <td>30,000đ</td>
        <td>25,000đ</td>
        <td>30,000đ</td>
        <td>35,000đ</td>
      </tr>
      <tr>
       <td>Lấy giao trong ngày , từ đơn thứ 5 cước 10k/đơn</td>
        <td>Lấy sáng giao chiều , lấy chiều giao qua ngày</td>
        <td>Lấy sáng , chiều và giao qua ngày</td>
        <td>Lấy trong ngày , giao sáng</td>
        <td>Lấy trong ngày , giao qua ngày</td>
        <td>Lấy trong ngày và giao 1-2 ngày</td>
        <td>Lấy qua ngày , giao sáng hôm sau</td>
        <td>Lấy qua ngày , giao trong ngày hôm sau</td>
        <td>Lấy qua ngày , giao 1-2 ngày</td>
      </tr>
    </tbody>
  </table>
  <p id="bhghg"> <b>Lưu ý :</b> Các bảng giá giao nhận tận nơi chỉ áp dụng cho đơn hàng gọn nhẹ , dưới 3KG và kích thước các chiều không vượt quá 30cm mỗi chiều . Với đơn hàng vượt quá KG sẽ phụ thu 3,000đ/KG vượt (Quy đổi từ thể tích ra khối lượng theo công thức : dài(cm) * rộng(cm) * cao(cm) / 6.000)</p>
</div>


@endsection