<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','cat_id','name','description','image','price','status','created_at','update_at'	
    ];
}
