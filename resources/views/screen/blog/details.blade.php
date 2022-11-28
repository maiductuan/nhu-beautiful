@extends('master')
@section('title','{{$Detailsblog->blog_title}}')
@section('content')
 <!-- feature section  -->
 <section class="feature_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
            {{$Detailsblog->blog_title}}
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2">
        <img width="100%" src="../../upload/images/{{$Detailsblog->blog_image}}" alt="" />
        </div>
      </div>
    </section>
 @endsection