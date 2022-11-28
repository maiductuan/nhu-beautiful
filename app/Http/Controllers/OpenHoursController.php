<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\OpenHours;

class OpenHoursController extends Controller
{
    public function index()
    {
        $ListOpenHours = OpenHours::orderby('id','desc')->get();
        return view('admin.open-hours.index',compact('ListOpenHours'));
    }
    public function create()
    {
        return view('admin.open-hours.create');
    }
    public function store(Request $request)
    { 
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $OpenHours = new OpenHours;
        $OpenHours->start_date = $request->start_date; 
        $OpenHours->end_date = $request->end_date; 
        $OpenHours->start_time = $request->start_time; 
        $OpenHours->end_time = $request->end_time; 
        $OpenHours->created_at = date('Y-m-d H:i:s');
        $OpenHours->save(); 
        
        //Thực hiện chuyển trang
        return redirect('/open-hours/list');
    }
}
