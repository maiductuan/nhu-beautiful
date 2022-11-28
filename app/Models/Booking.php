<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id','user_id','book_email','book_phone','book_date','book_time','status','created_at','update_at'	
    ];
}
