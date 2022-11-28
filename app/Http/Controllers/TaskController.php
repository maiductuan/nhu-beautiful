<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\models\Todolist;
use App\models\Category;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $ListCategory = Category::all();
        return view('task.create',compact('ListCategory'));
    }
    public function store(Request $request)
    { 
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $todolist = new todolist;
            $todolist->user_id = 1; 
            $todolist->task_title = $request->task_title; 
            $todolist->cat_id = $request->cat_id; 
            $todolist->task_contents = $request->task_contents;
            $todolist->created_at = date('Y-m-d H:i:s');
            $todolist->save();
            
            //Thực hiện chuyển trang
            return redirect('/');
    }
    public function edit($id)
    {
        $ListCategory = Category::all();
        $edittask = todolist::find($id);
        return view('task.edit',compact('edittask','ListCategory'));
    }
    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  
        $updateData = DB::table('task_list')->where('id', $request->id)->update([
            'task_title' => $request->task_title,
            'task_contents' => $request->task_contents,
            'cat_id' => $request->cat_id,
            'task_status' => $request->task_status,
            'update_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/');
    }
    public function done(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  
        $updateData = DB::table('task_list')->where('id', $request->id)->update([
            'task_status' => 4,
            'update_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('/');
    }
    public function details($id)
    {
        $DetailsTask = todolist::find($id);
        return view('task.details',compact('DetailsTask'));
    }
    public function destroy($id)
    {
        $deleteData = DB::table('task_list')->where('id', '=', $id)->delete();
        return redirect('/');
    }
}
