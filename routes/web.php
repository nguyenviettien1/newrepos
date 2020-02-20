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
use App\document_type;
Route::get('/', function () {
    return view('welcome');
});

// Đăng nhập cho admin để quản lý
Route::get('admin/dangnhap','UserController@getDangNhapAdmin');
Route::post('admin/dangnhap','UserController@postDangNhapAdmin');
// Đăng xuất admin thoát khỏi trang quản lý
Route::get('admin/logout','UserController@getDangXuatAdmin');
Route::get('admin/thongbaomoi','UserController@getThongBao');
Route::get('admin/pheduyet/{id}','UserController@getPheDuyet');

Route::get('admin/thongke/thongkeuser','UserController@getThongKeUser');
Route::get('admin/thongke/thongketailieu','UserController@getThongKeTaiLieu');

// Nhóm các trang để quản lý bảo mật
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'document_name'],function(){
        //admin/document_name/
        Route::get('danhsach','TaiLieuController@getDanhSach');
        
        Route::get('sua/{id}','TaiLieuController@getSua');
        Route::post('sua/{id}','TaiLieuController@postSua');

        Route::get('them','TaiLieuController@getThem');
        Route::post('them','TaiLieuController@postThem');

        Route::get('xoa/{id}','TaiLieuController@getXoa');
    });

    Route::group(['prefix'=>'document_type'],function(){
        
        Route::get('danhsach','LoaiTaiLieuController@getDanhSach');

        Route::get('sua/{id}','LoaiTaiLieuController@getSua');
        Route::post('sua/{id}','LoaiTaiLieuController@postSua');

        Route::get('them','LoaiTaiLieuController@getThem');
        Route::post('them','LoaiTaiLieuController@postThem');

        Route::get('xoa/{id}','LoaiTaiLieuController@getXoa');
    });

    Route::group(['prefix'=>'user'],function(){
        
        Route::get('danhsach','UserController@getDanhSach');

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');

        Route::get('them','UserController@getThem');
        Route::post('them','UserController@postThem');

        Route::get('xoa/{id}','UserController@getXoa');
    });
});


Route::get('trangchu','PagesController@trangchu');
Route::get('lienhe','PagesController@lienhe');
Route::get('gioithieu','PagesController@gioithieu');

Route::get('xemtailieu/{id}','PagesController@xemTailieu');

//Đăng nhập cho người dùng
Route::get('dangnhap','PagesController@getDangnhap');
Route::post('dangnhap','PagesController@postDangnhap');

Route::get('dangxuat','PagesController@getDangxuat');

//Quản lý người dùng
Route::get('nguoidung','PagesController@getNguoidung');
Route::post('nguoidung','PagesController@postNguoidung');

Route::get('dangky','PagesController@getDangky');
Route::post('dangky','PagesController@postDangky');

Route::get('timkiem','PagesController@getTimkiem');

Route::get('themtailieu','PagesController@getThemTaiLieu');
Route::post('themtailieu','PagesController@postThemTaiLieu');

Route::get('taikhoan','PagesController@getTaiKhoan');
Route::get('thongke','PagesController@getThongKe');
