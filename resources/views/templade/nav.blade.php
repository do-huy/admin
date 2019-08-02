<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="col-md-1"> 
      
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      {{-- <a class="navbar-brand" href="#">WebSiteName</a> --}}
      <a href="{{URL::Route('vdtexprss_index')}}"><img style="width: 120px;height: 50px;padding-top: 9px" id="footerimg" src="{{asset('img/express.png')}}" alt=""></a>
    </div>
    </div>
     <div class="col-md-11"> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{URL::Route('vdtexprss_index')}}">Trang chủ</a></li>
        <li><a href="{{URL::Route('introduce')}}">Giới thiệu</a></li>
        <li><a href="{{URL::Route('service')}}">Dịch vụ</a></li>
        <li><a href="{{URL::Route('contact')}}">Liên hệ</a></li>
        <li><a href="{{URL::Route('price')}}">Bảng giá</a></li>
      <!--   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nhận hàng<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="">Tạo đơn hàng</a></li>
            <li><a href="#">Thêm mới lấy và giao hàng</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>  -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/login"><i class="fas fa-user-check"></i>{{-- <span class="glyphicon glyphicon-log-in"></span> --}} Đăng nhập</a></li>
      </ul>
    </div>
  </div>
  </div>
</nav>