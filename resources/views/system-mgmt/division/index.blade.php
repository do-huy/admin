@extends('system-mgmt.division.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 style="color: #AA0000" class="box-title"><b>Danh sách đơn hàng</b></h3>
        </div>
        <div class="col-sm-4">
          <a style="float: right;" class="btn btn-primary" href="{{URL::route('add_bill')}}">Thêm mới</a>
        </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
     @if(session('thongbaos'))
       <div class="alert alert-success">
       {{ session('thongbaos') }}
       </div>
      @endif
      <div class="row">
        <div class="col-sm-6">
           <form  action="" method="get">
                        <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Tìm kiếm mã đơn hàng / tên / sđt -> người nhận">
                        <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
                       <!--   <a href="{{URL::to('getImport')}}" class="btn btn-success">Import excel</a> -->
                        <a href="javascript:history.back()" class="btn btn-danger">Quay Lại</a>
                        </span>
                        </div>
                    </form>    
        </div>
        <div class="col-sm-6"></div>
      </div>
    
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <div style="overflow-x:auto;">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <!-- <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="division: activate to sort column ascending">Tên đơn hàng</th> -->
                <th>
                 <input type="checkbox" id="checkall"  >
                </th>
                <th width="10%">Mã bill</th>
                <th width="10%">Tên người gửi</th>
                <th width="10%">SĐT</th>
                <th width="10%">T/thành</th>
                <th width="10%">Q/huyện</th>
                <th width="10%">P/xã</th>
                <th width="10%">Đ/chỉ</th>
                <th width="10%">Tên người nhận</th>
                <th width="10%">SĐT</th>
                <th width="10%">T/thành</th>
                <th width="10%">Q/huyện</th>
                <th width="10%">P/xã</th>
                <th width="10%">Đ/chỉ</th>
                <th width="10%">Tên hàng hóa</th>
                <th width="10%">Khối Lượng(Gram)</th>
                <th width="10%">Cod</th>
                <th width="10%">Tiền ứng</th>
                <th width="10%">Cước vận chuyển</th>
                <th width="10%">Tổng cước</th>
                <th width="10%">Hình thức t/toán</th>
                <th width="10%">Số kiện</th>
                <th width="10%">T.thái đơn hàng</th>
                <th width="10%">Shipper Giao hàng</th>
                <th width="10%">Thao tác</th>
               <!--  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Thao tác</th> -->
              </tr>
            </thead>
            <tbody>

            @foreach ($tbl_bills as $bill)
            @foreach($tbl_bills_people as $bill_people)
            @if($bill->id == $bill_people->bill_people_bill_id)
                <tr role="row" class="odd">
                  <td><input type="checkbox" name="bill" value="{{ $bill->id }}" ></td>
                  <td>{{ $bill->id }}</td>
                  <td>{{ $bill->bill_name }}</td>
                  <td>{{ $bill->bill_number }}</td>
                  <td>{{ $bill->province_name }}</td>
                  <td>{{ $bill->district_name }}</td>
                  <td>{{ $bill->ward_name }}</td>
                  <td>{{ $bill->bill_address }}</td>
                  <td>{{ $bill_people->bill_name_people }}</td>
                  <td>{{ $bill_people->bill_number_people }}</td>
                  <td>{{ $bill_people->province_name }}</td>
                  <td>{{ $bill_people->district_name }}</td>
                  <td>{{ $bill_people->ward_name }}</td>
                  <td>{{ $bill_people->bill_address_people }}</td>
                  <td>{{ $bill_people->bill_goods }}</td>
                  <td>{{ $bill_people->bill_total }}</td>
                  <td>{{ $bill_people->bill_cod }}</td>
                  <td>{{ $bill_people->bill_ung }}</td>
                  <td>{{ $bill_people->bill_money }}</td>
                  <td>{{ $bill_people->bill_sum }}</td>
                  <td>{{ $bill_people->bill_form }}</td>
                  <td>{{ $bill_people->bill_package_people }}</td>
                  <td>
                     @if($bill->bill_status_shipper=='New')
                      <a href="#" class="btn btn-info btn-xs">Mới tạo</a>
                      @elseif($bill->bill_status_shipper=='Delivered')
                      <a href="#" class="btn btn-danger btn-xs">Đang giao</a>
                      @elseif($bill->bill_status_shipper=='Completed')
                      <a href="#" class="btn btn-danger btn-xs">Giao hoàn tất</a>
                    @endif
                  </td>
                  <td>{{ $bill->shipper_name }} , {{ $bill->shipper_number }}</td>
                  <td>
                    <a onclick="return xacnhanxoa('Bạn có chắc ! muốn xóa đơn hàng này?')" href="/deleteBill/{{ $bill->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                    <a href="editBill/{{ $bill->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                  </td>
              </tr>
            @endif
            @endforeach
            @endforeach
            </tbody>
           <!--  <tfoot>
              <tr>
                <th width="10%" rowspan="1" colspan="1">Division Name</th>
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot> -->
          </table>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($tbl_bills)}} of {{count($tbl_bills)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            {{ $tbl_bills_people->links() }} 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('scripts')
<script src="{{ asset('js/delete.js') }}"></script>
@endsection