@extends('master')
@section('title','chi tiết')
@section('content')
 <!-- feature section  -->
<section class="feature_section layout_padding">
  <div class="row">
  <div class="col-sm-1"></div>
    <div class="col-sm-8">
    <form class="forms-sample" action="{{url('service-facebook/like-post')}}" method="post"> 
    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
    <input type="hidden" name="user_id" value="{{ ucfirst(Auth()->user()->id) }}"/>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nhập link bài viết:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="link_post" placeholder="Nhập link bài viết">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Chọn server:</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="server" value="1" checked>
              <label class="form-check-label" for="exampleRadios1">
              Tăng like bài viết giá rẻ
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="server" value="2">
              <label class="form-check-label" for="gridRadios2">
              Chọn được một cảm xúc, tăng nhanh nhất
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng cần tăng:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="soluong" placeholder="Số lượng cần tăng">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Giá tiền mỗi tương tác:</label>
        <div class="col-sm-10 ">
          <input type="text " class="form-control" name="price" value="15" >
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12" style="background: coral;">
          <p>Tổng: 1,200 đ</p>
          <p> Bạn sẽ buff 100 like với giá 12 đ / like</p>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Tạo đơn</button>
        </div>
      </div>
    </form>
    </div>
    <div class="com-sm-3">

    </div>
  </div>
</section>
 @endsection