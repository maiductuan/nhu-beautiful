<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Booking;
use App\models\Service;

class BookingController extends Controller
{
    public function index()
    {
        $ListBooking = Booking::all();
        return view('admin.booking.index',compact('ListBooking'));
    }
    public function Booking_Create()
    {
        $ListService = Service::all();
        return view('screen.booking.create',compact('ListService'));
    }
    public function Booking_Store(Request $request)
    { 
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $Booking = new Booking;
        $Booking->user_id = $request->user_id; 
        $Booking->book_email = $request->book_email; 
        $Booking->book_phone = $request->book_phone; 
        $Booking->book_service_id = $request->book_service_id; 
        $Booking->book_date = $request->book_date; 
        $Booking->book_time = $request->book_time; 
        $Booking->book_message = $request->book_message; 
        $Booking->created_at = date('Y-m-d H:i:s');
        $Booking->save(); 
        
        //Thực hiện chuyển trang
        return redirect('/');
    }
}
