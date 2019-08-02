<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bills;
use App\Bills_People;
use App\province;
use App\district;
use App\ward;
use App\people;
use Auth;
use DB;
use Hash;
 use Validator;

class VdtexpressController extends Controller
{
    public function getStateList($proviceId)
    {
        $district_list = DB::table("tbl_district")
        ->where("district_province_id",$proviceId)
        ->select(["district_name","district_id"])
        ->get()->toArray();

        return response()->json($district_list);
    }

      // dữ liệu quận huyện
    public function getWardList($districtId)
    {
        $ward_list = DB::table("tbl_ward")
        ->where("ward_district_id",$districtId)
        ->select(["ward_name","ward_id"])
        ->get()->toArray();

        return response()->json($ward_list);
    }
   public function GetBill()
   {
        $Getprovince = DB::table("tbl_province")
        ->get();
        return view('system-mgmt/division/create')->with('Getprovince',$Getprovince);
   }

    public function Post_bill(Request $req)
    { 
        $this->validate($req,[
            
            "bill.bill_name"  => "required",
            "bill.bill_number"  => "required",
            "bill.bill_province"  => "required",
            "bill.bill_district"  => "required",
            "bill.bill_ward"  => "required",
            "bill.bill_address"  => "required",
            "bill_people.bill_total"  => "required",
            "bill_people.bill_goods"  => "required",
            "bill_people.bill_form"  => "required",
            "bill_people.bill_date"  => "required",
            "bill_people.bill_name_people"  => "required",
            "bill_people.bill_number_people"  => "required",
            "bill_people.bill_province_people"  => "required",
            "bill_people.bill_district_people"  => "required",
            "bill_people.bill_ward_people"  => "required",
            "bill_people.bill_address_people"  => "required",
        ],[
           
            "bill.bill_name.required"=>"Xin vui lòng nhập tên người gửi",
            "bill.bill_number.required"=>"Xin vui lòng nhập số điện thoại người gửi",
            "bill.bill_province.required"=>"Xin vui lòng chọn tỉnh/thành người gửi",
            "bill.bill_district.required"=>"Xin vui lòng chọn quận/huyện người gửi",
            "bill.bill_ward.required"=>"Xin vui lòng chọn phường/xã người gửi",
            "bill.bill_address.required"=>"Xin vui lòng nhập địa chỉ người gửi",
            "bill_people.bill_total.required"=>"Xin vui lòng nhập hoặc tính khối lượng",
            "bill_people.bill_goods.required"=>"Xin vui lòng nhập tên hàng hóa",
            "bill_people.bill_form.required"=>"Xin vui lòng nhập chọn hình thức giao hàng",
            "bill_people.bill_date.required"=>"Xin vui lòng nhập chọn ngày giao hàng",
            "bill_people.bill_name_people.required"=>"Xin vui lòng nhập tên người nhận",
            "bill_people.bill_number_people.required"=>"Xin vui lòng nhập số điện thoại người nhận",
            "bill_people.bill_province_people.required"=>"Xin vui lòng chọn tỉnh/thành người nhận",
            "bill_people.bill_district_people.required"=>"Xin vui lòng chọn quận/huyện người nhận",
            "bill_people.bill_ward_people.required"=>"Xin vui lòng chọn phường/xã người nhận",
            "bill_people.bill_address_people.required"=>"Xin vui lòng nhập địa chỉ người nhận",

        ]);

        $params = $req->all();
        $params['bill']['user_id'] = auth()->user()->id;
        $params['bill']['bill_province_office'] = $params['bill']['bill_province'];
        $bill = $params['bill'];
        $customerBill = $params['bill_people'];
       
        $query = DB::table('tbl_bills')->insertGetId($bill);
       
        if($query){
            $customerBill = array_merge($customerBill,['bill_people_bill_id' => $query]);
            $querys = DB::table('tbl_bills_people')->insertGetId($customerBill);
        }
        return redirect('add/bill')->with('thongbao','Tạo đơn hàng thành công , VDTexpress đã tiếp nhận đơn hàng');
    }
    // Vùng quận huyện bắt đầu tới vùng quận huyện kết thúc kết thúc 
    public function regionToRegion (Request $request){
        $params = $request->all();

        if($params['to'] && $params['from']){
            $to = district::find($params['to']);
            $from = district::find($params['from']);

            $total = DB::table("tbl_region_g_e")
            ->where('id_region_go', $to->region_region_id)
            ->where('id_region_end', $from->region_region_id)->first();
            return json_encode($total);
        }
    }
    // Vùng phường xã bắt đầu tới vùng phường xã kết thúc kết thúc 
    public function regionToRegionWard (Request $request){
        $params = $request->all();

        if($params['to'] && $params['from']){
            $to = ward::find($params['to']);
            $from = ward::find($params['from']);

            $total = DB::table("tbl_region_g_e")
            ->where('id_region_go', $to->region_ward_id)
            ->where('id_region_end', $from->region_ward_id)->first();
            return json_encode($total);
        }
    }
    // danh sách đơn hàng
     public function Get_bill(Request $request)
    {
         // $this->data['title'] = 'Quản lý hóa đơn';
       
        $tbl_bills = DB::table('tbl_bills')
                                    
                    ->leftJoin('tbl_province','tbl_bills.bill_province','tbl_province.province_id')

                    ->leftJoin('tbl_district','tbl_bills.bill_district','tbl_district.district_id')

                    ->leftJoin('tbl_ward','tbl_bills.bill_ward','tbl_ward.ward_id')

                    ->leftJoin('tbl_shipper','tbl_bills.bill_people_finish','tbl_shipper.id')

                    ->select('tbl_bills.*','tbl_province.province_name','tbl_district.district_name','tbl_ward.ward_name','tbl_shipper.shipper_name','tbl_shipper.shipper_number')

                    ->orderBy('id', 'desc');
        if (auth()->user()->type != 1) {
            $tbl_bills->where('user_id', auth()->user()->id);
            // $tbl_bill->where('bill_is_active',1);
            // $tbl_bills->where('bill_province_office', '=', Auth()->user()->user_manage_province);
        }
        $this->data['tbl_bills'] = $tbl_bills->get()->toArray();
        $search = $request->get('search');
        $tbl_bills_people = DB::table('tbl_bills_people')
        
        ->where('bill_people_bill_id','like','%'.$search.'%')
        ->orWhere('bill_name_people','like','%'.$search.'%')
        ->orWhere('bill_number_people','like','%'.$search.'%')

        ->leftJoin('tbl_province','tbl_bills_people.bill_province_people','tbl_province.province_id')
        ->leftJoin('tbl_district','tbl_bills_people.bill_district_people','tbl_district.district_id')
        ->leftJoin('tbl_ward','tbl_bills_people.bill_ward_people','tbl_ward.ward_id')
                    
        ->select('tbl_bills_people.*','tbl_province.province_name','tbl_district.district_name','tbl_ward.ward_name')
        ->orderBy('bill_people_bill_id', 'desc')
                    // ->get()->toArray();
        ->paginate(10);
        $this->data['tbl_bills_people'] = $tbl_bills_people;
       
        return view('system-mgmt/division/index', [
            'tbl_bills' => $this->data['tbl_bills'],
            'tbl_bills_people' => $this->data['tbl_bills_people'],
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function GetIndex()
    {
        return view('index');
    }

    public function insert_index(Request $req)
    {

        $this->validate($req,[
            "users_number"  => "required|unique:users,users_number",
            "password"  => "required",
            "email"  => "required|unique:users,email"
        ],[

            "users_number.required"=>"Xin vui lòng nhập số điện thoại",
            "users_number.unique"=>"Số điện thoại đã được sử dụng",
            "password.required"=>"Xin vui lòng nhập mật khẩu",
            "email.required"=>"Xin vui lòng nhập email",
            "email.unique"=>"Email đã được sử dụng"
     ]);

        $username = $req->input('username');
        $email = $req->input('email');
        $type = $req->input('type');
        $lastname = $req->input('lastname');
        $firstname = $req->input('firstname');
        $users_number = $req->input('users_number');
        $password = Hash::make($req->input('password'));

        $data = array("users_number"=>$users_number,"password"=>$password,"username"=>$username,"email"=>$email,"type"=>$type,"lastname"=>$lastname,"firstname"=>$firstname);

        DB::table('users')->insert($data);

        return redirect('/')->with('dangkynhanh','Đăng ký khách hàng VDT thành công');
    }
    // Gọi trang đăng ký admin
    public function GetRegister()
    {
        return view('auth.registerLogin');
    }
    // thêm dữ liệu trang đăng ký
     public function PostRegistersss(Request $req)
    {

        $this->validate($req,[
            "users_number"  => "required|unique:users,users_number",
            "password"  => "required",
            "email"  => "required|unique:users,email"
        ],[

            "users_number.required"=>"Xin vui lòng nhập số điện thoại",
            "users_number.unique"=>"Số điện thoại đã được sử dụng",
            "password.required"=>"Xin vui lòng nhập mật khẩu",
            "email.required"=>"Xin vui lòng nhập email",
            "email.unique"=>"Email đã được sử dụng"
     ]);

        $username = $req->input('username');
        $email = $req->input('email');
        $type = $req->input('type');
        $lastname = $req->input('lastname');
        $firstname = $req->input('firstname');
        $users_number = $req->input('users_number');
        $password = Hash::make($req->input('password'));

        $data = array("users_number"=>$users_number,"password"=>$password,"username"=>$username,"email"=>$email,"type"=>$type,"lastname"=>$lastname,"firstname"=>$firstname);

        DB::table('users')->insert($data);

        return redirect('/GetRegister')->with('dangkynhanh','Đăng ký khách hàng VDT thành công');
    }
    public function add_letter(Request $req)
    {
        $letter_content = $req->input('letter_content');

        $data = array("letter_content"=>$letter_content);

        DB::table('tbl_letter')->insert($data);
            
        return redirect('/')->with('letter','Gửi email thành công ! Tổng đài VDTexpress sẽ liên hệ nhanh nhất với bạn');
    }
     public function introduce()
    {
        return view('introduce.introduce');
    }
     public function contact()
    {
        return view('contact.contact');
    }
    public function price()
    {
        return view('price.price');
    }
    public function service()
    {
        return view('service.service');
    }
    public function test()
    {
        return view('price.test');
    }
    public function PostContact(Request $req)
    {
        $name_contact = $req->input('name_contact');
        $title_contact = $req->input('title_contact');
        $content_contact = $req->input('content_contact');
        $email_contact = $req->input('email_contact');

        $data = array("name_contact"=>$name_contact,"title_contact"=>$title_contact,"content_contact"=>$content_contact,"email_contact"=>$email_contact);

        DB::table('contact')->insert($data);
            
        return redirect('/contact')->with('contact','VDTexpress ! cảm ơn ý kiến của khách hàng');
    }
    public function GetPeopleSua($id)
    {
        $province_donhang = DB::table("tbl_province")
                // ->groupBy('province_name')
        ->get();
        $people = people::find($id);
        return view('people.people',['editpeople'=>$people])->with('province_donhang',$province_donhang);
    }
    public function PostPeopleSua(Request $request,$id)
    {
        $people = people::find($id);
       
        $people->username = $request->username;
        $people->province_users_name = $request->province_users_name;
        $people->district_users_name = $request->district_users_name;
        $people->ward_users_name = $request->ward_users_name;

        $people->users_number = $request->users_number;
        $people->user_address = $request->user_address;
        $people->user_account_number = $request->user_account_number;


        $people->save();

        return redirect('insert/people/'.$id)->with('thongbao' , 'cập nhập thành công');
    }
    // xóa bill
     public function delete_Bill($id)
    {
     $billDel = DB::table('tbl_bills')
     ->where('id', $id)->delete();

     $billDel = DB::table('tbl_bills_people')
     ->where('bill_people_bill_id', $id)->delete();

        return redirect('bill_index')->with('thongbaos','Bạn đã xóa thành công');
    }
    // chỉnh sửa bill
   public function edit_Bill($id)
    {
        $bill_province = DB::table("tbl_province")
        ->get();
        // $Bills = Bills::find($id);
        $Bills  = Bills::find($id);
        // dd($Bills);
        $People = $Bills->Bills_People()->get()->first();
        

        // dd($People);
        return view('system-mgmt.division.edit',['bill'=>$Bills,'people'=>$People])->with('bill_province',$bill_province);
    }
    public function PostEitBill(Request $request,$id)
    {
        $bill_province = DB::table("tbl_province")
        ->get();
        $Bills  = Bills::find($id);
        $People = $Bills->Bills_People()->get()->first();


        $Bills->bill_name = $request->bill_name;
        $Bills->bill_number = $request->bill_number;
        $Bills->bill_province = $request->bill_province;
        $Bills->bill_district = $request->bill_district;
        $Bills->bill_ward = $request->bill_ward;
        $Bills->bill_address = $request->bill_address;

        $People->bill_total = $request->bill_total;

        $Bills->save();
        $People->save();

        return redirect('/editBill/'.$id)->with('thongbao','Sửa đơn hàng thành công');

        
    }
}
