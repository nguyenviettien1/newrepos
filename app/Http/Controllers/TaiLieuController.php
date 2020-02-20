<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\document_type;
use App\document_name;
use App\User;
class TaiLieuController extends Controller
{
    //
    public function getDanhSach(){
        $user=User::all();
        $tailieu = document_name::all();
        return view('admin.document_name.danhsach',['tailieu'=>$tailieu,'user'=>$user]);
    }

    public function getThem(){
        
        $loaitailieu = document_type::all();
        return view('admin.document_name.them',['loaitailieu'=>$loaitailieu]);
    }

    // Phương thức post thêm mới loại tài liệu
    public function postThem(Request $request){
        $this->validate($request,
        [
            'TenTaiLieu'=>'required|min:4|max:100|unique:document_name,DocumentName',
            'TenLoaiTaiLieu'=>'required'
        ],
        [
            'TenTaiLieu.required'=>'Bạn chưa nhập tên tài liệu',   //Bắt lỗi
            'TenTaiLieu.min'=>'Tên tài liệu không hợp lệ',
            'TenTaiLieu.max'=>'Tên tài liệu không hợp lệ',
            'TenTaiLieu.unique'=>'Tên tài liệu đã tồn tại',
            'TenLoaiTaiLieu.required'=>'Bạn chưa chọn loại tài liệu'
        ]);
        $tailieu = new document_name;
        $tailieu->DocumentName = $request->TenTaiLieu;
        $tailieu->Author=$request->TenTacGia;
        $tailieu->Link=$request->Link;
        $tailieu->Address=$request->DiaChiMua;
        $tailieu->Note=$request->GhiChu;
        $tailieu->Status=$request->Status;
        $tailieu->id_DocumentType=$request->TenLoaiTaiLieu;
        $tailieu->user_id = Auth::user()->id;
        $tailieu->save();
        
        return redirect('admin/document_name/them')->with('thongbao', 'Thêm thành công tài liệu');
       
    }

    public function getSua($id){
        $loaitailieu=document_type::all();
        $tailieu=document_name::find($id);
        return view('admin.document_name.sua',['tailieu'=>$tailieu,'loaitailieu'=>$loaitailieu]);
    }

    public function postSua(Request $request,$id){
        $tailieu=document_name::find($id);
        $this->validate($request,
        [
            'TenTaiLieu'=>'required|min:4|max:100'
        ],
        [
            'TenTaiLieu.required'=>'Bạn chưa nhập tên loại tài liệu',
                
            'TenTaiLieu.min'=>'Tên tài liệu không hợp lệ',
            'TenTaiLieu.max'=>'Tên tài liệu không hợp lệ',
        ]
        );
        $tailieu->DocumentName=$request->TenTaiLieu;
        $tailieu->Author=$request->TenTacGia;
        $tailieu->Link=$request->Link;
        $tailieu->Address=$request->DiaChiMua;
        $tailieu->Note=$request->GhiChu;
        $tailieu->Status=$request->Status;
        $tailieu->id_DocumentType=$request->TenLoaiTaiLieu;
        $tailieu->save();

        return redirect('admin/document_name/sua/'.$id)->with('thongbao', 'Sửa thành công tài liệu');
    }

    public function getXoa($id){
        $tailieu=document_name::find($id);
        $tailieu->delete();

        return redirect('admin/document_name/danhsach')->with('thongbao', 'Xóa thành công tài liệu');
    }
    
}
