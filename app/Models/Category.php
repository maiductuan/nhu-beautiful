<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','cat_name','cat_contents','created_at','update_at'	
    ];
}
