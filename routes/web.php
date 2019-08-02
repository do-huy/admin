<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('employee-management', 'EmployeeManagementController');
Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');

Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');

Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');

Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');

Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');

Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');

Route::get('add/bill',[
	'as' => 'add_bill',
	'uses' => 'VdtexpressController@GetBill'
]);
Route::post('post/bill', [
    'as' => 'post_bill', 
    'uses' => 'VdtexpressController@Post_bill'
]);

Route::get('get-state-list/{proviceId}',[
    'as' => 'district',
    'uses' => 'VdtexpressController@getStateList'
]);

Route::get('get-ward-list/{districtId}',[
    'as' => 'ward',
    'uses' => 'VdtexpressController@getWardList'
]);

Route::get('region-to-region','VdtexpressController@regionToRegion');

Route::get('region-to-region-ward','VdtexpressController@regionToRegionWard');

Route::get('/bill_index',[
    'as' => 'index_bill',
    'uses' => 'VdtexpressController@Get_bill'
]);

Route::get('main/logout',[
    'as' => 'logout',
    'uses' => 'VdtexpressController@logout'
]);

Route::get('/', [
    'as' => 'vdtexprss_index', 
    'uses' => 'VdtexpressController@GetIndex'
]);
Route::post('insert/index', [
    'as' => 'insert_index', 
    'uses' => 'VdtexpressController@insert_index'
]);

Route::get('/GetRegister', [
    'as' => 'vdtexprss_GetRegister', 
    'uses' => 'VdtexpressController@GetRegister'
]);
Route::post('PostRegister', [
    'as' => 'vdtexprss_PostRegistersss', 
    'uses' => 'VdtexpressController@PostRegistersss'
]);
Route::post('/insert/letter', [
    'as' => 'letter', 
    'uses' => 'VdtexpressController@add_letter'
]);

Route::get('introduce', [
    'as' => 'introduce', 
    'uses' => 'VdtexpressController@introduce'
]);

Route::get('contact', [
    'as' => 'contact', 
    'uses' => 'VdtexpressController@contact'
]);
Route::get('price', [
    'as' => 'price', 
    'uses' => 'VdtexpressController@price'
]);
Route::get('service', [
    'as' => 'service', 
    'uses' => 'VdtexpressController@service'
]);
Route::post('/post/contact', [
    'as' => 'Post_Contact', 
    'uses' => 'VdtexpressController@PostContact'
]);

Route::get('insert/people/{id}', [
    'as' => 'insert_people', 
    'uses' => 'VdtexpressController@GetPeopleSua'
]);
Route::post('add/people/{id}',[
    'as' => 'add_people',
    'uses' => 'VdtexpressController@PostPeopleSua'
]);

Route::get('test', [
    'as' => 'test', 
    'uses' => 'VdtexpressController@test'
]);
//xóa đơn hàng
Route::get('deleteBill/{id}',[
    'as' => 'delete.bill',
    'uses' => 'VdtexpressController@delete_Bill'
]);

Route::get('editBill/{id}',[
    'as' => 'edit.bill',
    'uses' => 'VdtexpressController@edit_Bill'
]);
Route::post('editBill/{id}',[
    'as' => 'postEdit_bill',
    'uses' => 'VdtexpressController@PostEitBill'
]);

