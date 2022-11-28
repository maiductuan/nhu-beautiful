<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','user_id','blog_title','blog_contents','blog_status','created_at','update_at'	
    ];
}
