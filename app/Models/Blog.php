<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','user_id','cat_id','blog_title','blog_contents','blog_status','blog_image','created_at','update_at'	
    ];
}
