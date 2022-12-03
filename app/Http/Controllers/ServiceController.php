<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\models\Service;
use App\models\Category;

class ServiceController extends Controller
{
    // public function index()
    // {
    //     $ListLikePost = LikePost::all();
    //     return view('admin.service.index',compact('ListLikePost'));
    // }
    // public function likedone(Request $request)
    // {
    //     date_default_timezone_set("Asia/Ho_Chi_Minh");  
    //     $updateData = DB::table('like_post')->where('id', $request->id)->update([
    //         'status' => 1,
    //         'update_at' => date('Y-m-d H:i:s')
    //     ]);
    //     return redirect('/service-facebook/like-order-all');
    // }
    public function index()
    {
        $ListService = Service::all();
        return view('admin.service.index',compact('ListService'));
    }
    public function create()
    {
        $ListCategory = Category::all();
        return view('admin.service.create',compact('ListCategory'));
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
            $service = new Service;
            $service->name = $request->name; 
            $service->cat_id = $request->cat_id; 
            $service->description = $request->description;
            $service->image = $getimage;
            $service->price = $request->price; 
            $service->status = 1;
            $service->created_at = date('Y-m-d H:i:s');
            $service->save();
            
            //Thực hiện chuyển trang
            return redirect('/service/list');
    }
}
