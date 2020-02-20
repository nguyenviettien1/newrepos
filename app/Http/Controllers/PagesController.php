<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Http\Request;
use App\document_type;
use App\document_name;
use App\User;
class PagesController extends Controller
{
    function __contruct(){
        $loaitailieu = document_type::all();
        
        view()->share('loaitailieu',$loaitailieu);
    }
    //
    function trangchu()
    {
        $tailieu= document_name::paginate(10);
        $loaitailieu = document_type::all();
        return view('pages.trangchu',['loaitailieu'=>$loaitailieu,'tailieu'=>$tailieu]);
    }
    function lienhe(){
        $loaitailieu = document_type::all();
        return view('pages.lienhe',['loaitailieu'=>$loaitailieu]);
    }
    function gioithieu(){
        $loaitailieu = document_type::all();
        return view('pages.gioithieu',['loaitailieu'=>$loaitailieu]);
    }
    function getDangnhap(){
        return view('pages.dangnhap');
    }
    function postDangnhap(Request $request){
        $this->validate($request,
        [            
            'password'=>'required|min:3|max:25',
            'email'=>'required'
        ],
        [
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'password.max'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'email.required'=>'Bạn chưa nhập email'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('trangchu');
        }
        else{
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    function getDangxuat(){
        Auth::logout();
        return redirect('dangnhap');
    }
    function getNguoidung(){
        $user = Auth::user();
        return view('pages.nguoidung',['nguoidung'=>$user]);
    }
    function postNguoidung(Request $request){
        $this->validate($request,
        [
            'name'=>'required|min:4',
            
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên người dùng',   //Bắt lỗi
            'name.min'=>'Tên người dùng phải có ít nhất 4 kí tự',  
        ]);
        $user=Auth::user();
        $user->name=$request->name;
        
        if($request->changePassword=="on"){
            $this->validate($request,
        [
            
            'password'=>'required|min:3|max:25',
            'passwordAgain'=>'required|same:password'
        ],
        [
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'password.max'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại password',
            'passwordAgain.same'=>'Password bạn nhập lại không khớp',
            
        ]);
            $user->password=bcrypt($request->password);
        }
        
        $user->save();
        return redirect('nguoidung')->with('thongbao', 'Sửa thành công user');
    }

    function getDangky(){
        return view('pages.dangky');
    }
    function postDangky(Request $request){
        $this->validate($request,
        [
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:3|max:25',
            'passwordAgain'=>'required|same:password'
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên người dùng',   //Bắt lỗi
            'name.min'=>'Tên người dùng phải có ít nhất 4 kí tự',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng của email',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Bạn chưa nhập password',
            'password.min'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'password.max'=>'Password phải có ít nhất 3 kí tự nhiều nhất 25 kí tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại password',
            'passwordAgain.same'=>'Password bạn nhập lại không khớp',
            
        ]);
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->level=0;
        $user->save();
        return redirect('dangky')->with('thongbao', 'Chúc mừng bạn đã đăng ký thành công user');
        
    }
    function getTimkiem(Request $request){
        $loaitailieu = document_type::all();
        $tukhoa=$request->tukhoa;
        $tailieu=document_name::where('DocumentName','like', '%'.$tukhoa.'%')->take(30)->paginate(5);
        
        return view('pages.timkiem',['tailieu'=>$tailieu,'tukhoa'=>$tukhoa,'loaitailieu'=>$loaitailieu]);
    }
    
    function xemTailieu($id){
        $loaitailieu = document_type::all();
        $loaitailieu2 = document_type::find($id);
        $tailieu = document_name::where('id_DocumentType',$id)->paginate(5);
        return view('pages.xemtailieu',['loaitailieu'=>$loaitailieu,'loaitailieu2'=>$loaitailieu2,'tailieu'=>$tailieu]);
    }
    function getThemTaiLieu(){
        $loaitailieu = document_type::all();
        return view('pages.themtailieu',['loaitailieu'=>$loaitailieu]);
    }
    public function postThemTaiLieu(Request $request){
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
        $tailieu->DocumentName=$request->TenTaiLieu;
        $tailieu->Author=$request->TenTacGia;
        $tailieu->Link=$request->Link;
        $tailieu->Address=$request->DiaChiMua;
        $tailieu->Note=$request->GhiChu;
        $tailieu->user_id = Auth::user()->id;
        $tailieu->Status=1;
        $tailieu->id_DocumentType=$request->TenLoaiTaiLieu;
        $tailieu->save();
        
        return redirect('themtailieu')->with('thongbao', 'Thành công, đợi người quản trị kiểm duyệt, cảm ơn bạn đã đóng góp');
       
    }
    function getTaiKhoan(){
        $user=User::all();
        $loaitailieu=document_type::all();
        $tailieu = document_name::all();
        return view('pages.taikhoan',['tailieu'=>$tailieu,'user'=>$user,'loaitailieu'=>$loaitailieu]);
    }
    function getThongKe(){
        $user=User::all();
        $loaitailieu=document_type::all();
        $tailieu = document_name::all();
        return view('pages.thongke',['tailieu'=>$tailieu,'user'=>$user,'loaitailieu'=>$loaitailieu]);
    }
}
