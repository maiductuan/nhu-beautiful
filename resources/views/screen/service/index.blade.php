@extends('master')
@section('title','Trang chủ')
@section('content')
 <!-- feature section  -->
 <section class="feature_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
           Buff Facebook
        </h2>
      </div>
      <div class="">

        <div class="feature_card-container layout_padding2">
          <div class="col-sm-12">
            <a class="btn btn-primary" href="{{url('service-facebook/like-post')}}" role="button">Tăng like bài viết</a>
            <a class="btn btn-primary" href="{{url('service-facebook/like-post')}}" role="button">Tăng sub/follow</a>
            <a class="btn btn-primary" href="{{url('service-facebook/like-post')}}" role="button">Tăng comment</a>
            <a class="btn btn-primary" href="{{url('service-facebook/like-post')}}" role="button">Tăng mắt like stream</a>
          </div>

        </div>
      </div>
    </section>
 @endsection