<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Users;
use Hash;
class UserController extends Controller
{
    public function index()
    {
        $ListUser = Users::all();
        return view('admin.user.index',compact('ListUser'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    { 
        $getimage = '';
        if($request->hasFile('image')){
            //Lưu hình ảnh vào thư mục public/upload/image
            $image = $request->file('image');
            $getimage = time().'_'.$image->getClientOriginalName();
            $destinationPath = public_path('upload/images');
            $image->move($destinationPath, $getimage);
        }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $adduser = new Users;
        $adduser->name = $request->name; 
        $adduser->email = $request->email; 
        $adduser->password = Hash::make($request->password);
        $adduser->image = $getimage;
        $adduser->created_at = date('Y-m-d H:i:s');
        $adduser->save();
        
        //Thực hiện chuyển trang
        return redirect('/user');
    }
    public function edit($id)
    {
        $editUser = Users::find($id);
        return view('admin.user.edit',compact('editUser'));
    }
    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $user = Users::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->updated_at = date('Y-m-d H:i:s');
        $user->update();
        return redirect('/user');
    }
    public function RegisterGet()
    {
        return view('screen.register');
    }
    public function RegisterPost(Request $request)
    { 
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $adduser = new Users;
        $adduser->name = $request->name; 
        $adduser->email = $request->email; 
        $adduser->password = Hash::make($request->password);
        $adduser->created_at = date('Y-m-d H:i:s');
        $adduser->save();
        $user = Users::find($id);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->intended('/');
        }  
        //Thực hiện chuyển trang
        return redirect('/user');
    }

}
