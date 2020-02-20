<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\document_type;
class LoaiTaiLieuController extends Controller
{
    //
    public function getDanhSach(){
        $loaitailieu = document_type::all();
        return view('admin.document_type.danhsach',['loaitailieu'=>$loaitailieu]);
    }

    public function getThem(){
      return view('admin.document_type.them');
    }

    // Phương thức post thêm mới loại tài liệu
    public function postThem(Request $request){
        $this->validate($request,
        [
            'TenLoaiTaiLieu'=>'required|min:4|max:100|unique:document_type,DocumentType'
        ],
        [
            'TenLoaiTaiLieu.required'=>'Bạn chưa nhập tên loại tài liệu',   //Bắt lỗi
            'TenLoaiTaiLieu.min'=>'Tên loại tài liệu không hợp lệ',
            'TenLoaiTaiLieu.max'=>'Tên loại tài liệu không hợp lệ',
            'TenLoaiTaiLieu.unique'=>'Tên loại tài liệu đã tồn tại',
        ]);
        $loaitailieu = new document_type;
        $loaitailieu->DocumentType=$request->TenLoaiTaiLieu;
        $loaitailieu->save();
        
        return redirect('admin/document_type/them')->with('thongbao', 'Thêm thành công loại tài liệu');
       
    }

    public function getSua($id){
        $loaitailieu=document_type::find($id);
        return view('admin.document_type.sua',['loaitailieu'=>$loaitailieu]);
    }

    public function postSua(Request $request,$id){
        $loaitailieu=document_type::find($id);
        $this->validate($request,
        [
            'TenLoaiTaiLieu'=>'required|unique:document_type,DocumentType|min:4|max:100'
        ],
        [
            'TenLoaiTaiLieu.required'=>'Bạn chưa nhập tên loại tài liệu',
            'TenLoaiTaiLieu.unique'=>'Tên loại tài liệu đã tồn tại',
            'TenLoaiTaiLieu.min'=>'Tên loại tài liệu không hợp lệ',
            'TenLoaiTaiLieu.max'=>'Tên loại tài liệu không hợp lệ',
        ]
        );
        $loaitailieu->DocumentType=$request->TenLoaiTaiLieu;
        $loaitailieu->save();

        return redirect('admin/document_type/sua/'.$id)->with('thongbao', 'Sửa thành công loại tài liệu');
    }

    public function getXoa($id){
        $loaitailieu=document_type::find($id);
        $loaitailieu->delete();

        return redirect('admin/document_type/danhsach')->with('thongbao', 'Xóa thành công loại tài liệu');
    }
}
