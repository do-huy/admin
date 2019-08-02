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


<div class="services">
    <div class="container">
      <div class="text-center">
        <h2 id="lele">Dịch vụ VDTexpress</h2>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fas fa-file-invoice-dollar"></i>
          <h3>Dịch vụ ứng tiền</h3>
          <p>Dịch vụ ứng tiền chỉ áp dụng cho những khách hàng thân thiết hoặc có bảo lãnh của bên thứ 3 có giao dịch với VDTexpress.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <i class="fa fa-cloud"></i>
          <h3>Dịch vụ thu hộ miễn phí</h3>
          <p>Khách hàng mang theo biên nhận để nhận tiền thu hộ tại các điểm giao dịch , khách hàng chuyển khoản chịu phí theo phí ngân hàng trên 5.000.000đ phụ thu thêm 10-20.000đ.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-book"></i>
          <h3>Chính sách hỗ trợ</h3>
          <p>Hỗ trợ đóng gói lưu kho , bảo quản hàng hóa cho khách . Hỗ trợ gửi và lấy ở các chành xe , bến xe . Bồi thường , giải quyết thiếu nại thỏa đáng và nhanh chóng.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
          <i class="fa fa-gear"></i>
          <h3>Chính sách miễn phí</h3>
          <p>Miễn phí thay đổi thông tin đơn hàng . Miễn phí trả hàng khi giao không thành công . Miễn cước phí các đơn hàng trễ hẹn . Miễn phí kiểm tra hàng , và các chính sách thử.</p>
        </div>
      </div>
    </div>
    <div class="text-center">
      <div class="container">
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fas fa-motorcycle"></i>
          <h3>Dịch vụ ship hàng</h3>
          <p>Shipper có thể hỗ trợ lấy và giao khẩn cấp nếu khách hàng có giao dịch nhiều với VDTexpress.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <i class="fas fa-truck-moving"></i>
          <h3>Dịch vụ xe tải</h3>
          <p>Đối với những đơn hàng nặng cồng kềnh khó di chuyển , VDTexpress sẽ hỗ trợ khách hàng giao dịch hàng bằng xe tải.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fas fa-diagnoses"></i>
          <h3>Tri ân khách hàng</h3>
          <p>Khách hàng hợp tác với VDTexpress đạt số lượng đơn hàng nhất định , khách hàng có thể nhận phiếu giảm giá từ VDTexpress.</p>
        </div>
        <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
          <i class="fas fa-synagogue"></i>
          <h3>Giao nhận toàn quốc</h3>
          <p>Nhận đơn hàng từ khách lấy hàng đồng thời giao hàng trên 63 tỉnh thành.</p>
        </div>
      </div>
    </div>
  </div>

@endsection