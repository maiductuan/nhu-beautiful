<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\models\TemplateWebsite;
use App\models\Category;
use Illuminate\Http\Request;

class TemplateWebsiteController extends Controller
{
    public function index()
    {
        $ListTemplate = TemplateWebsite::all();
        return view('admin.template.index',compact('ListTemplate'));
    }
    public function create()
    {
        $ListCategory = Category::all();
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
