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

 <div class="about">
    <div class="container">
      <div class="text-center">
        <h2 id="gioithieuvdt">GIỚI THIỆU VỀ VDTEXPRESS</h2>
        <div class="col-md-10 col-md-offset-1">
          <p>VDTgroup khởi đầu với VDTexpress - là dịch vụ giao nhận hàng hóa , ứng tiền , thu hộ , giữa Long An và TPHCM<br>
          VDTexpress được thành lập vào ngày 2/5/2018, tự hào là đơn vị vận chuyển hàng đầu KV Đức Hòa, Đức Huệ/LA-SG<br>
          04/2019 VDTexpress hợp tác với SuperShip Việt Nam thành lập SuperShip Long An – hoạt động lĩnh vực chuyển phát nhanh Toàn Quốc<br>
          Mục tiêu 2019 - 2020: VDTexpress cùng SPS LA sẽ có mặt tại các Huyện còn lại của Tỉnh Long An. Riêng VDTexpres Hướng đến mở rộng phục vụ các tỉnh lân cận với TpHCM và phát triển mô hình ra các trung tâm kinh tế khác như Cần Thơ, Đà Nẵng, Hà Nội<br>
          Định hướng 2022: tận dụng Hệ Sinh Thái của VDTgroup sẽ phát triển thêm các thương hiệu VDTcoffee, VDTfood, VDTshop<br>
          </p>
          <p>

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

  <section id="about-us">
    <div class="container">
      <div class="text-center wow fadeInDown">
        <h2 id="gioithieuvdt">Sứ mệnh VDTexpress</h2>
        <p>VDTexpress đem đến cho khách hàng trải nghiệm giao hàng đột phá: rẻ hơn, nhanh hơn và thông minh hơn bằng cách kết hợp sức mạnh của công nghệ, vận hành tối ưu và mạng lưới vận chuyển chuyên nghiệp.</p>
      </div>
      <div class="skill-wrap clearfix">
        <div class="row">
          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="joomla-skill">
                <p><em>100%</em></p>
                <p>Tầm nhìn</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="html-skill">
                <p><em>100%</em></p>
                <p>Sứ mệnh</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
              <div class="css-skill">
                <p><em>100%</em></p>
                <p>Triết lí kinh doanh</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
              <div class="wp-skill">
                <p><em>100%</em></p>
                <p>Đội ngũ</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- our-team -->
      <div class="team">
        <div class="text-center wow fadeInDown">
          <h2 id="gioithieuvdt">Đội ngũ công ty</h2>
          <p>Đội ngũ VDTexpress gồm những người trẻ trung, năng động, thích ứng với tình hình thay đổi công nghệ nhanh chóng. Các cán sự không ngại khó khăn, thử thách để đưa VDTexpress vượt qua những mục tiêu tưởng như không thể vượt qua.</p>
        </div>

        <div class="row clearfix">
          <div class="col-md-4 col-sm-6">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="img/ceo.jpg" alt=""></a>
                </div>
                <div class="media-body">
                  <h4>Lê Sơn Lâm</h4>
                  <h5>CEO</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">manage</a></li>
                    <li class="btn"><a href="#">operating</a></li>
                    <li class="btn"><a href="#">organization</a></li>
                  {{--   <li class="btn"><a href="#">Ux</a></li>
                    <li class="btn"><a href="#">Photoshop</a></li> --}}
                  </ul>

                  <ul class="social_icons">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                  </ul>
                </div>
              </div>
              <!--/.media -->
             {{--  <p>Người thành lập VDTexpress , cũng như điều hành quản lí mọi tổ chức , hoạt động chính của VDTexpress.</p> --}}
            </div>
          </div>
          <!--/.col-lg-4 -->


          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="img/huyit.jpg" alt=""></a>
                </div>
                <div class="media-body">
                  <h4>Đỗ Huy</h4>
                  <h5>Developer</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">Web</a></li>
                    <li class="btn"><a href="#">software</a></li>
                    <li class="btn"><a href="#">organization</a></li>
                  </ul>
                  <ul class="social_icons">
                    <li><a href="https://www.facebook.com/do.huy.1997" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  {{--   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                  </ul>
                </div>
              </div>
              <!--/.media -->
             {{--  <p>Tổ chức hoạt động các ý tưởng công nghệ " Website , Software ".</p> --}}
            </div>
          </div>
          <!--/.col-lg-4 -->
        </div>
        <!--/.row -->
        <div class="row team-bar">
          <div class="first-one-arrow hidden-xs">
            <hr>
          </div>
          <div class="first-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="second-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
          <div class="third-arrow hidden-xs">
            <hr> <i class="fa fa-angle-up"></i>
          </div>
          <div class="fourth-arrow hidden-xs">
            <hr> <i class="fa fa-angle-down"></i>
          </div>
        </div>
        <!--skill_border-->

        <div class="row clearfix">
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img class="media-object" src="img/tranggia.jpg" alt=""></a>
                </div>

                <div class="media-body">
                  <h4>Thân Thị Thùy Trang</h4>
                  <h5>Trưởng Phòng Tài Chính</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">documents</a></li>
                    <li class="btn"><a href="#">finance</a></li>
                    <li class="btn"><a href="#">Timekeeping</a></li>
                    {{-- <li class="btn"><a href="#">Photoshop</a></li> --}}
                  </ul>
                  <ul class="social_icons">
                    <li><a href="https://www.facebook.com/trang.than.395"><i class="fab fa-facebook-square"></i></a></li>
                   {{--  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                  </ul>
                </div>
              </div>
              <!--/.media -->
             {{--  <p>Thống kê và kiểm tra tài chính của VDTexpress.</p> --}}
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
              <div class="media">
                <div class="pull-left">
                  <a href="#"><img style="width: 145px;height: 137px" class="media-object" src="img/thaogia.png" alt=""></a>
                </div>
                <div class="media-body">
                  <h4>Võ Thị Thanh Thảo</h4>
                  <h5>Trưởng Phòng Kinh Doanh</h5>
                  <ul class="tag clearfix">
                    <li class="btn"><a href="#">coordinator</a></li>
                    <li class="btn"><a href="#">debt</a></li>
                    <li class="btn"><a href="#">customer</a></li>
                   {{--  <li class="btn"><a href="#">Photoshop</a></li> --}}
                  </ul>
                  <ul class="social_icons">
                    <li><a href="https://www.facebook.com/nhannghiahieuthao"><i class="fab fa-facebook-square"></i></a></li>
                    {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li> --}}
                  </ul>
                </div>
              </div>
              <!--/.media -->
            {{--   <p>Điều phối giao / nhận , hỗ trợ khách hàng , tổng đài chính của VDTexpress.</p> --}}
            </div>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--section-->
    </div>
    <!--/.container-->
  </section>
  <!--/about-us-->
  


@endsection