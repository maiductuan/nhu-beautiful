@extends('admin.master')
@section('title','add blog')
@section('content')
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit booking order</h4>
                    <form class="forms-sample" action="{{url('booking/update',$BookingDetails->id)}}" method="post" >
                      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" class="form-control" name="book_email" placeholder="xxx@gmail.com" value="{{$BookingDetails->book_email}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Number phone</label>
                        <input type="text" class="form-control" name="book_phone" placeholder="0123456789" required value="{{$BookingDetails->book_phone}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Service</label>
                        <select class="form-select" aria-label="Default select example" name="book_service_id" required>
                          <option value="{{$BookingDetails->book_service_id}}" class="text-success">{{$BookingDetails->book_service_id}}</option>
                          @foreach($ListService as $ListService) 
                          <option value="{{$ListService->id}}">{{$ListService->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date</label>
                        <input id="startDate" class="form-control" type="date" name="book_date" required  value="{{$BookingDetails->book_date}}"/>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Time</label>
                        <select class="form-select" aria-label="Default select example" name="book_time" required >
                          <option value="{{$BookingDetails->book_time}}" class="text-success">{{$BookingDetails->book_time}}</option>
                          <option value="8:00 - 9:00">8:00 - 9:00</option>
                          <option value="9:00 - 10:00">9:00 - 10:00</option>
                          <option value="10:00 - 11:00">10:00 - 11:00</option>
                          <option value="11:00 - 12:00">11:00 - 12:00</option>
                          <option value="3:00 - 14:00">13:00 - 14:00</option>
                          <option value="14:00 - 15:00">14:00 - 15:00</option>
                          <option value="15:00 - 16:00">15:00 - 16:00</option>
                          <option value="16:00 - 17:00">16:00 - 17:00</option>
                          <option value="17:00 - 18:00">17:00 - 18:00</option>
                          <option value="18:00 - 19:00">18:00 - 19:00</option>
                          <option value="19:00 - 20:00">19:00 - 20:00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">status</label>
                        <select class="form-select" aria-label="Default select example" name="status" required >
                            @if($BookingDetails->status == 1)
                              <option value="1">Đã tư vấn</option>
                            @elseif($BookingDetails->status == 2)
                              <option value="2">Nhận</option>
                            @elseif($BookingDetails->status == 3)
                              <option value="3">Done</option>
                            @elseif($BookingDetails->status == 4)
                              <option value="4">Cancel</option>
                            @else
                              <option value="0">New Booking</option>
                            @endif
                              <option value="1">Đã tư vấn</option>
                              <option value="2">Nhận</option>
                              <option value="3">Done</option>
                              <option value="4">Cancel</option>
                              <option value="0">New Booking</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="book_message" rows="3">{{$BookingDetails->book_message}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      @endsection