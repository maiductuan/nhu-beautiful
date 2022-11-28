<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\models\Service;

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
        return view('admin.template.index',compact('ListService'));
    }
    public function create()
    {
        $ListCategory = Service::all();
        return view('admin.template.create',compact('ListCategory'));
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
            $posttemplate = new TemplateWebsite;
            $posttemplate->name = $request->name; 
            $posttemplate->cat_id = $request->cat_id; 
            $posttemplate->description = $request->description;
            $posttemplate->image = $getimage;
            $posttemplate->created_at = date('Y-m-d H:i:s');
            $posttemplate->save();
            
            //Thực hiện chuyển trang
            return redirect('/template/list');
    }
}
