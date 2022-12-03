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
    public function create()
    {
        $ListService = Service::all();
        return view('admin.booking.create',compact('ListService'));
    }
    public function Booking_Order()
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
    public function edit($id)
    {
        $ListService = Service::all();
        $BookingDetails = Booking::find($id);
        return view('admin.booking.edit',compact('BookingDetails','ListService'));
    }
    public function update(Request $request,$id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh"); 
        $Booking = Booking::find($id);
        $Booking->user_id = $request->user_id; 
        $Booking->book_email = $request->book_email; 
        $Booking->book_phone = $request->book_phone; 
        $Booking->book_service_id = $request->book_service_id; 
        $Booking->book_date = $request->book_date; 
        $Booking->book_time = $request->book_time; 
        $Booking->book_time = $request->book_time; 
        $Booking->status = $request->status; 
        $Booking->update_at = date('Y-m-d H:i:s');
        $Booking->update();
        return redirect('/booking/list');
    }

    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect('/booking/list');
    }
}
