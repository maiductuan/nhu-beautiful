@extends('master')
@section('title','Trang chủ')
@section('content')
 <!-- feature section  -->
 <section class="feature_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
            Dịch vụ thiết kế website đa ngành nghề, lĩnh vực
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2">
            
        @foreach($bloglist as $list) 
          <div class="col-sm-2">
            <div class="feature_card">
                <div class="feature_img-container" style="background-color: white;">
                <div class="">
                    <img src="../upload/images/{{$list->blog_image}}" alt="" />
                </div>
                </div>
                <div class="feature_detail-box">
                <h4>
                    <a href="{{url('blog/details',$list->id)}}">{{$list->blog_title}}</a>
                </h4>
                <span>{{$list->cat_name}}</span>
                <p>
                {{Str::substr($list->blog_contents, 0, 100)}}   <!--  count 100 từ đầu tiên -->
                </p>
                </div>
            </div>  
          </div>
          @endforeach
        </div>
      </div>
    </section>
 @endsection