<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\document_type;
use App\document_name;
class UserController extends Controller
{
    //
    public function getDanhSach(){
        $user=User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem(){
        return view('admin.user.them');
    }
    public function postThem(Request $request){
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
        $user->level=$request->level;
        $user->save();
        return redirect('admin/user/them')->with('thongbao', 'Thêm thành công user');
    }
    public function getSua($id){
        $user=User::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id){
        $this->validate($request,
        [
            'name'=>'required|min:4',
            
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên người dùng',   //Bắt lỗi
            'name.min'=>'Tên người dùng phải có ít nhất 4 kí tự',  
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->level=$request->level;
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
        return redirect('admin/user/sua/'.$id)->with('thongbao', 'Sửa thành công user');
    }
    public function getXoa($id){
        $user=User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao', 'Xóa thành công user');
    }
    public function getDangNhapAdmin(){
        return view('admin.login');
    }
    public function postDangNhapAdmin(Request $request){
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
            return redirect('admin/document_type/danhsach');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function getDangXuatAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }
    public function getThongBao(){
        $user=User::all();
        $tailieu = document_name::all();
        return view('admin.thongbaomoi',['tailieu'=>$tailieu,'user'=>$user]);
    }
    public function getThongKeTaiLieu(){
        $tailieu = document_name::all();
        $loaitailieu = document_type::all();
        return view('admin.thongke.thongketailieu',['tailieu'=>$tailieu,'loaitailieu'=>$loaitailieu]);
    }
    public function getThongKeUser(){
        $user=User::all();
        $tailieu = document_name::all();
        $loaitailieu = document_type::all();
        return view('admin.thongke.thongkeuser',['tailieu'=>$tailieu,'loaitailieu'=>$loaitailieu,'user'=>$user]);
    }
    public function getPheDuyet($id){
        $tailieu = document_name::find($id);
        $tailieu->Status=0;
        $tailieu->save();

        return redirect('admin/thongbaomoi')->with('thongbao', 'Phê duyệt thành công');
    }
}
