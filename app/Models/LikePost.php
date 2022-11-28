<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    use HasFactory;
    protected $table = 'like_post';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','user_id','link_post','server','soluong','price','status','created_at','update_at'	
    ];
}
