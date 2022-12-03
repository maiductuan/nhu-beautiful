<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $CategoryList = Category::orderBy('id')->get();
        return view('category.index',compact('CategoryList'));
    }
    public function create()
    {
        return view('category.create'); //,compact('category','workshop')
    }
    public function store(Request $request)
    { 
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $catlist = new Category;
            $catlist->cat_name = $request->cat_name; 
            $catlist->cat_contents = $request->cat_contents;
            $catlist->created_at = date('Y-m-d H:i:s');
            $catlist->save();
            
            //Thực hiện chuyển trang
            return redirect('category/list-category');
    }
}
