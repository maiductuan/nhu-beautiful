<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\models\Blog;
use App\models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        $ListCategory = Category::all();
        return view('admin.blog.create',compact('ListCategory'));
    }
    public function store(Request $request)
    { 
        $getimage = '';
        if($request->hasFile('blog_image')){
            //Hàm kiểm tra dữ liệu
            $this->validate($request, 
                [
                    //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                    'blog_image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],          
                [
                    //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                    'blog_image.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'blog_image.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            
            //Lưu hình ảnh vào thư mục public/upload/image
            $blog_image = $request->file('blog_image');
            $getimage = time().'_'.$blog_image->getClientOriginalName();
            $destinationPath = public_path('upload/images');
            $blog_image->move($destinationPath, $getimage);
            }
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $postblog = new Blog;
            $postblog->user_id = 1; 
            $postblog->blog_title = $request->blog_title; 
            $postblog->cat_id = $request->cat_id; 
            $postblog->blog_contents = $request->blog_contents;
            $postblog->blog_image = $getimage;
            $postblog->created_at = date('Y-m-d H:i:s');
            $postblog->save();
            
            //Thực hiện chuyển trang
            return redirect('/');
    }
}
