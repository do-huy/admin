@extends('templade.master')
@section('content')
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
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
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required"><a href="">Tạo đơn chành xe</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required"><a href="https://mysupership.vn/login">Giao toàn quốc</a></button>
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
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a href="">Tạo đơn chành xe</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"><a href="https://mysupership.vn/login">Giao toàn quốc</a></button>
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
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a href="">Tạo đơn chành xe</a></button>
                  </div>
                  <div class="form-group">
                    <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"><a href="https://mysupership.vn/login">Giao toàn quốc</a></button>
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

<hr>

    <div class="container">
     <div class="col-md-6">
       <p style="color: #555555"><b>Đăng ký nhanh trở thành khách hàng của VDTexpress</b></p>
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

 <form action="{{route('insert_index')}}" method="post" accept-charset="utf-8"> 
          <div class="form-group">
             {{ csrf_field() }}
            <label id="resssssss">Số điện thoại</label>
            <input type="number" name="users_number" class="form-control" />
          </div>
          <div id="an" class="form-group">
            <label id="resssssss">Tên</label>
            <input value="VDT" type="text" name="username" class="form-control" />
          </div>

          <div id="an" class="form-group">
            <label id="resssssss">Tên</label>
            <input value="VDT" type="text" name="lastname" class="form-control" />
          </div>

          <div id="an" class="form-group">
            <label id="resssssss">Họ</label>
            <input value="VDT" type="text" name="firstname" class="form-control" />
          </div>

          <div id="an" class="form-group">
            <label id="resssssss">Type</label>
            <input value="3" type="text" name="type" class="form-control" />
          </div>

            <div class="form-group">
            <label id="resssssss">Email</label>
            <input type="email" name="email" class="form-control" />
          </div>
          
          <div class="form-group">
            <label id="resssssss">Mật khẩu</label>
            <input type="password" name="password" class="form-control" />
          </div>

          <div class="form-group">      
            <input type="submit" name="btn" class="btn btn-primary" value="Tạo khách hàng" />
          </div>
  </form>

     </div>

      <div style="text-align: center; background: #DDDDDD" class="col-md-6">
        <img style="width: 100%; max-height: 295px;" src="{{asset('img/ghn.png')}}">
     </div>
    </div>
  <hr>


  <div class="about">
    <div class="container">
      <div class="text-center">
        <h2 style="color: #AA0000">tổng quan về chúng tôi</h2>
        <div class="col-md-10 col-md-offset-1">
          <p>VDTgroup khởi đầu với VDTexpress - là dịch vụ giao nhận hàng hóa, ứng tiền, thu hộ, … giữa Long An và TPHCM <br>
VDTexpress được thành lập vào ngày 2/5/2018, tự hào là  đơn vị vận chuyển hàng đầu Khu Vực Tân An, Bến Lức, Đức Hòa, Đức Huệ của Long An<br>

04/2019 VDTexpress hợp tác với SuperShip Việt Nam thành lập SuperShip Long An – hoạt động lĩnh vực chuyển phát nhanh Toàn Quốc
          </p>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="btn-gamp"><a href="#">Hợp tác</a></div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="gamp-btn"><a href="#">Đánh giá</a></div>
        </div>

      </div>
    </div>
  </div>
  <hr>

  <div class="services">
    <div class="container">
      <div class="text-center">
        <h2><b id="gioithieuvdt">Giới thiệu VDTexpress</b></h2>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <i class="fas fa-bezier-curve"></i>
        <h3>Tiêu chí</h3>
        <p>Trở thành dịch vụ giao nhận chuyên nghiệp và nhanh chóng hàng đầu các tuyến liên tỉnh với cự ly dưới 100km từ TP.HCM với các tỉnh lân cận. Từ đó phát triển mô hình ra các trung tâm kinh tế trọng điểm Toàn Quốc.</p>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <i class="fa fa-cloud"></i>
        <h3>Cam kết</h3>
        <p>Mang đến những dịch vụ tốt nhất, tiết kiệm nhất, nhanh chóng nhất, tiện lợi nhất, minh bạch nhất . Hỗ trợ và chia sẻ lợi ích cùng cộng đồng với hết khả năng của tập thể VDTexpress . Lời hứa luôn được thực hiện đúng với bất cứ hoàn cảnh nào.</p>
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <i class="fa fa-book"></i>
        <h3>Đội ngũ VDTexpress</h3>
        <p>Làm việc tại VDTexpress mang đến cho các bạn tinh thần học hỏi, cầu tiến, công bằng, trao dồi kinh nghiệm giữa người cũ và người mới . Thu nhập cạnh tranh lành mạnh, hưởng theo năng lực thật sự của chính mình . 
      </div>
      <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
        <i class="fa fa-gear"></i>
        <h3>Kết nối</h3>
        <p> VDTexpress cùng SPS LA sẽ sớm có mặt tại toàn Tỉnh Long An. Riêng VDTexpress Hướng đến mở rộng phục vụ các tỉnh lân cận với TpHCM và phát triển mô hình ra các trung tâm kinh tế khác như Cần Thơ, Đà Nẵng, Hà Nội</p>
      </div>
    </div>
  </div>

  <section class="action">
    <div class="container">
      <div class="left-text hidden-xs">
        <h4 id="gioithieuvdt">Ưu điểm VDTexpress</h4>
        <p>{{-- <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em> --}} <i class="fas fa-check"></i> Lấy hàng, nhập hàng Sài Gòn - Mua Hộ hàng hóa<br>

<i class="fas fa-check"></i> Gửi hàng thu tiền hộ Toàn Quốc dành cho Shop Online<br>

<i class="fas fa-check"></i> Lấy hàng tận nhà, giao hàng tận tay<br>

<i class="fas fa-check"></i> Ứng tiền trước - Thu hộ hộ miễn phí<br>

<i class="fas fa-check"></i> Giao nhanh trong ngày ở các trung tâm<br>

<i class="fas fa-check"></i> Dịch vụ An toàn - Uy tín - Tận Tâm</p>
      </div>
      <div class="right-image hidden-xs">
        
        
      </div>
    </div>
  </section>

  <div class="gallery">
    <div class="text-center">
      <h2 style="color: #AA0000">Hệ thống bưu cục</h2>
     {{--  <p>Công ty Chuyển Phát Nhanh Vận Đức Thành chuyên kinh doanh dịch vụ chuyển phát nhanh trong nước các loại hàng hóa, bưu phẩm, uy tín, giá rẻ nhất.<br>

Hiện chúng tôi đã xây dựng được mạng lưới rộng Thành Phố Hồ Chí Minh - Long An, sẵn sàng đáp ứng tốt nhất mọi yêu cầu chuyển phát nhanh của Quý khách hàng thông qua các loại hình dịch vụ như:<br>
- Chuyển phát nhanh hỏa tốc.

- Chuyển phát nhanh đảm bảo.<br>

- Chuyển phát nhanh hẹn giờ.<br>

- Chuyển phát trong ngày (HCM-LA) đi nhận hàng để chuyển phát trước 10h , Khách chủ động đến VDTexpress gửi hàng trước 12h<br>

- Chuyển phát hàng thu tiền ( COD) , ứng tiền trước cho khách hàng </p> --}}
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h2.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch tân phú</h4>
            <p> 05 Đàm Thận Huy , Phường Phú Thọ Hòa , Quận Tân Phú - Hotline : 0906676577</p>
           
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h1.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch tân an</h4>
            <p> 98 Thủ Khoa Huân , Phường 1 , TP.Tân An , Tỉnh Long An - Hotline : 0937493534</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h3.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch bến lức</h4>
            <p>13 Đường Số 2 , KDC Mai Thị Non , KP2 , TT.Bến Lức , Tỉnh Long An - Hotline : 0979939309</p>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h4.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch hậu nghĩa</h4>
            <p>164 Châu Văn Liêm , Ô7 , Khu B , TT.Hậu Nghĩa - Hotline : 0914330778</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h5.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch đức hòa</h4>
            <p>322 KP4 , Thị Trấn Đức Hòa , Huyện Đức Hòa , Tỉnh Long An - Hotline : 0868235509</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="img/h6.jpg" alt="" class="img-responsive" />
          <figcaption>
            <h4>Phòng giao dịch đức huệ</h4>
            <p>86 Đường 838 KP1 , TT.Đông Thành , Huyện Đức Huệ , T.Long An - Hotline : 0388563053</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>


<script type="text/javascript">
  $("div.alert").delay(2000).slideUp();
</script>

@endsection

