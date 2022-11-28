@extends('admin.master')
@section('title','add blog')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Recent Tickets</h4>
                <div class="table-responsive">
                    <table class="table">
                    <thead>
                        <tr>
                            <th> User </th>
                            <th> Service </th>
                            <th> Email </th>
                            <th> Number phone </th>
                            <th> Booking date </th>
                            <th> Booking time </th>
                            <th> Message </th>
                            <th> status </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ListBooking as $ListBooking) 
                        <tr>   
                            <td>Tuấn</td> 
                            <td>{{$ListBooking->book_service_id}}</td> 
                            <td>{{$ListBooking->book_email}}</td> 
                            <td>{{$ListBooking->book_phone}}</td> 
                            <td>{{$ListBooking->book_date}}</td> 
                            <td>{{$ListBooking->book_time}}</td> 
                            <td>{{$ListBooking->book_message}}</td> 
                            @if($ListBooking->status == 1)
                            <td>
                                Đã tư vấn
                            </td>
                            @elseif($ListBooking->status == 2)
                            <td>
                                Nhận
                            </td>
                            @elseif($ListBooking->status == 3)
                            <td>
                                Done
                            </td>
                            @else
                            <td>
                                New Booking 
                            </td>
                            @endif
                            <td><a href="{{url('user/edit',$ListBooking->id)}}">Chỉnh sửa</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
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