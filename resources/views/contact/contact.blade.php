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

<div class="mapssss">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2904214863647!2d106.62159331411657!3d10.789054261912344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752c01491d1579%3A0x60b9f51881d8464!2zNSDEkMOgbSBUaOG6rW4gSHV5LCBQaMO6IFRo4buNIEhvw6AsIFTDom4gUGjDuiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1558685283420!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>



<section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Thông điệp gửi cho vdtexpress</h2>
        <p>Hãy gửi những khó khăn của bạn hoặc những phản hồi của bạn khi sử dụng dịch vụ của chúng tôi</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
           @if(session('contact'))
            <div class="alert alert-success">
            {{ session('contact') }}
            </div>
            @endif
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage">
           
          </div>
          <form action="{{route('Post_Contact')}}" method="post" role="form" class="contactForm">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="name_contact" class="form-control" id="name" placeholder="Nhập tên của bạn" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email_contact" id="email" placeholder="Nhập email của bạn" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="title_contact" id="subject" placeholder="Nhập tiêu đề" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="content_contact" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Nhập nội dung"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Gửi thông điệp</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

 


@endsection