@extends('master')
@section('title','chi tiết')
@section('content')
 <!-- feature section  -->
 <section class="feature_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
            {{$templatedetails->name}}
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2">
        <img width="100%" src="../../upload/images/{{$templatedetails->image}}" alt="{{$templatedetails->name}}" />
        </div>
      </div>
      <!-- template tương tự section  -->
     <section class="feature_section layout_padding" >
      <div class="container">
        <h2 class="text-uppercase">
          Mẫu Website tương tự
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2" >
          @foreach($listtemplate as $listtem) 
          <div class="feature_card" style="width: 436px !important;margin: 0 20px !important;">
            <div class="feature_img-container" style="height: 436px !important;">
              <div class="">
              <img style="width:436px;height:436px;object-fit: cover;object-position: 50% 50%;border-radius: 10px;" src="../../upload/images/{{$listtem->image}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                <a href="{{url('template/details',$listtem->id)}}">{{$listtem->name}}</a>
              </h4>
            </div>
          </div>
          @endforeach
      </div>
    </section>

    <!-- end template tương tự section -->
    </section>
 @endsection