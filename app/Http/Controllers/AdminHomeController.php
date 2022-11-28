<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        // $ListCategory = Category::all();
        return view('admin.dashboard.index');
    }
    
}
