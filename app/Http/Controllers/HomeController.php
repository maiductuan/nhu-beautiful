<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\Blog;
use App\models\TemplateWebsite;
use App\models\LikePost;
Use App\models\User;
use App\models\Service;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;


class HomeController extends Controller
{
    public function index()
    {
        $bloglist = DB::table('blog as t')
        ->leftJoin('category as cat', 't.cat_id', '=', 'cat.id')
        ->select('t.id','t.blog_title','cat.cat_name','t.cat_id','t.blog_contents','t.blog_status')
        ->orderby('id','desc')->get();
        $listtemplate = TemplateWebsite::orderby('id','desc')->get();
        $ListService = Service::orderby('id','desc')->get();
        $BestService = Service::orderby('id','desc')->where('best',1)->get();
        return view('screen.home',compact('bloglist','listtemplate','ListService'));
    }
    public function login()
    {
        return view('screen.login');
    }
    public function PostLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->intended('/');
        }   
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function blog()
    {
        $bloglist = DB::table('blog as t')
        ->leftJoin('category as cat', 't.cat_id', '=', 'cat.id')
        ->select('t.id','t.blog_title','cat.cat_name','t.cat_id','t.blog_contents','t.blog_image','t.blog_status')
        ->orderby('t.id','desc')->where('t.blog_status', 0)->get();
        return view('screen.blog.index',compact('bloglist'));
    }
    public function details($id)
    {
        $Detailsblog = Blog::find($id);
        return view('screen.blog.details',compact('Detailsblog'));
    }
    public function service_details($id)   
    {
        $listtemplate = TemplateWebsite::orderby('id','desc')->whereNotIn('id',[$id])->take(5)->get();
        $templatedetails = TemplateWebsite::find($id);
        return view('screen.template.details',compact('templatedetails','listtemplate'));
    }
// service 
    public function service()   
    {
        $ListService = Service::all();
        return view('screen.service.index',compact('ListService'));
    }
    public function OrderHistory()
    {
        $OrderByUser = LikePost::where('user_id',Auth::id())->get();
        return view('screen.service-facebook.order_history',compact('OrderByUser'));
    }
    
}
