<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenHours extends Model
{
    use HasFactory;
    protected $table = 'open_hours';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','start_date','end_date','start_time','end_time','status','created_at','update_at'	
    ];
}
