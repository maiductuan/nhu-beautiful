@extends('master')
@section('title','chi tiết')
@section('content')
 <!-- feature section  -->
<section class="feature_section layout_padding">
  <div class="container">
  <h4>Lịch sử đơn hàng</h4>
@if(Auth::user() != null)
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Server</th>
      <th scope="col">Link</th>
      <th scope="col">Cảm xúc</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Số cảm xúc đã chạy</th>
      <th scope="col">Status</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
  @foreach($OrderByUser as $OrByUser) 
    <tr>
      <th scope="row">{{$OrByUser->id}}</th>
      <td>{{$OrByUser->server}}</td>
      <td>
        <div class="input-group">
            <input type="text" class="form-control" value="{{$OrByUser->link_post}}">
            <div class="input-group-append">
                <a href="{{$OrByUser->link_post}}" target="_blank"><span class="input-group-text">^</span></a>
            </div>
        </div>
      </td>
      <td><i class="bi-hand-thumbs-up text-primary"></i></td>
      <td>{{$OrByUser->soluong}}</td>
      <td>{{$OrByUser->soluong}}</td>
      @if($OrByUser->status == 0)
        <td>
            <p class="bg-warning">Đang chờ</p>
        </td>
      @else
        <td>
            <p class="bg-success">Thành công</p>
        </td>
      @endif
      <td>{{$OrByUser->price}}</td>
      <td><?php $total=($OrByUser->price*$OrByUser->soluong); echo number_format($total, 0); ?> VNĐ</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<h3>Bạn cần phải <a href="{{ url('/login') }}">login</a> trước</h3>
@endif  
  </div>
</section>
 @endsection