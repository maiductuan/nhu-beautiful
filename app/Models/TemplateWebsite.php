<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateWebsite extends Model
{
    use HasFactory;
    protected $table = 'template_webiste';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','cat_id','name','description','image','status','created_at','update_at'	
    ];
}
