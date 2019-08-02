 <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4 id="gioithieuvdt">Liên HỆ</h4>
        <p id="por">Hãy liên hệ ngay với chúng tôi , chúng tôi sẽ giúp bạn hoàn thành nhanh nhất</p>
       {{--  <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i> 05 Đàm Thận Huy , Phú Thọ Hòa , Quận Tân Phú </li>
            <li><i class="fa fa-phone fa"></i> + 09.066.765.77</li>
            <li><i class="fa fa-envelope fa"></i> Vanducthanh62@gmail.com</li>
          </ul>
        </div> --}}
        <p id="por"><i class="fa fa-home fa"></i> 5 Đàm Thận Huy , Phú Thọ Hòa , Q.Tân Phú</p>
        <p id="por"><i class="fa fa-phone fa"></i> + 0906676577</p>
        <p id="por"><i class="fa fa-envelope fa"></i> Vanducthanh62@gmail.com</p>

        <div style="text-align: center;font-size: 28px;" >
        <a href="https://www.facebook.com/giaohangLonganSaiGon/?__tn__=%2Cd%2CP-R&eid=ARAI46EVhvlZeWQ0xwQQWnEHXJbQTOSKfo62H0imyobFSCbrQlvX6zQjWYcd5v6aO6fgUbkO0wmRQJSv" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.facebook.com/VDTexpress" target="_blank"><i class="fab fa-facebook-square"></i></a>
        </div>

      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4 id="gioithieuvdt">Hình ảnh triển lãm</h4>
          <ul class="sidebar-gallery">
            <li><a><img src="img/h7.png" alt="" /></a></li>
            <li><a><img src="img/h8.png" alt="" /></a></li>
            <li><a><img src="img/h9.png" alt="" /></a></li>
            <li><a><img src="img/h10.png" alt="" /></a></li>
            <li><a><img src="img/h11.png" alt="" /></a></li>
            <li><a><img src="img/h14.png" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4 id="gioithieuvdt">Gửi phản ánh về dịch vụ</h4>
          <p id="por">Mọi thắc mắc và ý kiến về dịch vụ của chúng tôi , xin vui lòng gửi thông tin email của bạn để chúng tôi hỗ trợ kịp thời</p>
          
            @if(session('letter'))
            <div class="alert alert-success">
              {{ session('letter') }}
            </div>
            @endif
           <form action="/insert/letter" method="post" accept-charset="utf-8">

          <div class="btn-gamp">
            {{ csrf_field() }}
            <input name="letter_content" type="email" class="form-control" id="exampleInputEmail3" placeholder="Nhập Email">
          </div>
          <input type="submit" name="btn" class="btn btn-primary" value="Gửi email" />

          </form>

        </div>
      </div>



    </div>
  </footer>

  <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li id="pog"><a href="" class="fb tool-tip" title="Facebook"><i class="fas fa-archway"></i> Giới thiệu</a></li>
            <li id="pog"><a href="" class="twitter tool-tip" title="Twitter"><i class="fas fa-phone-volume"></i> Liên hệ</a></li>
            <li id="pog"><a href="" class="gplus tool-tip" title="Google Plus"><i class="fas fa-dollar-sign"></i> Bảng giá</a></li>
           {{--  <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li> --}}
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div style="color: white" class="copyright">
          &copy; 2019
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Day
            -->
            <a href="https://bootstrapmade.com/">Developed</a> by <a href="https://bootstrapmade.com/">IT-VDTexpress</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <link rel="stylesheet" type="text/css" href="js/jquery.js">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="js/wow.min.js">
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>