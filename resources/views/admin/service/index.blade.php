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
                        <th>ID</th>
                        <th>User</th>
                        <th>Server</th>
                        <th>Link</th>
                        <th>Cảm xúc</th>
                        <th>Số lượng</th>
                        <th>Số cảm xúc đã chạy</th>
                        <th>Status</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ListLikePost as $listtem) 
                        <tr>    
                            <td scope="row">{{$listtem->id}}</td>
                            <td>{{$listtem->user_id}}</td>
                            <td>{{$listtem->server}}</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$listtem->link_post}}">
                                    <div class="input-group-append">
                                        <a href="{{$listtem->link_post}}" target="_blank"><span class="input-group-text">^</span></a>
                                    </div>
                                </div>
                            </td>
                            <td><i class="bi-hand-thumbs-up text-primary"></i></td>
                            <td>{{$listtem->soluong}}</td>
                            <td>{{$listtem->soluong}}</td>
                            @if($listtem->status == 0)
                                <td>
                                    <p class="bg-warning">Đang chờ</p>
                                </td>
                            @else
                                <td>
                                    <p class="bg-success">Thành công</p>
                                </td>
                            @endif
                            <td>{{$listtem->price}}</td>
                            <td><?php $total=($listtem->price*$listtem->soluong); echo number_format($total, 0); ?> VNĐ</td>
                            <td>
                                <form class="forms-sample" action="{{url('service-facebook/like-order-done')}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                    <input type="hidden" name="id" value="{{$listtem->id}}"/>
                                    <button type="submit" class="btn btn-gradient-primary">Done</button>
                                </form>
                            </td>
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