  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/dashboard"><i class="fa fa-home" aria-hidden="true"></i> <span>VDTexpress</span></a></li>
        <li class="active"><a href="{{URL::route('add_bill')}}"><i class="fa fa-cart-plus" aria-hidden="true"></i> <span> Tạo đơn hàng</span></a></li>
       <!--  <li><a href="{{ url('employee-management') }}"><i class="fa fa-link"></i> <span>Employee Management</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> <span> Danh mục đơn hàng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="{{ url('system-management/department') }}">+ Thêm mới đơn hàng</a></li> -->
            <li><a href="{{route('index_bill')}}"><i class="fa fa-chevron-right" aria-hidden="true"></i>Danh sách đơn hàng</a></li>
         <!--    <li><a href="{{ url('system-management/country') }}">Country</a></li>
            <li><a href="{{ url('system-management/state') }}">State</a></li>
            <li><a href="{{ url('system-management/city') }}">City</a></li> -->
           <!--  <li><a href="{{ url('system-management/report') }}">Report</a></li> -->
          </ul>
        </li>

        
        @cannot('member')
        @can('admin')
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user" aria-hidden="true"></i> <span>Danh mục tài khoản</span></a></li>
        @endcan
        @endcannot
        

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>