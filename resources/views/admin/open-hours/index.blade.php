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
                            <th>  </th>
                            <th> start date </th>
                            <th> end date </th>
                            <th> start time </th>
                            <th> end time </th>
                            <th> status </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ListOpenHours as $ListOpenHours) 
                        <tr>   
                            <td>{{$ListOpenHours->start_date}}</td> 
                            <td>{{$ListOpenHours->end_date}}</td> 
                            <td>{{$ListOpenHours->start_time}}</td> 
                            <td>{{$ListOpenHours->end_time}}</td> 
                            @if($ListOpenHours->status == 0)
                            <td>
                                Hiện
                            </td>
                            @else
                            <td>
                                Ẩn
                            </td>
                            @endif
                            <td><a href="{{url('user/edit',$ListOpenHours->id)}}">Chỉnh sửa</a> </td>
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