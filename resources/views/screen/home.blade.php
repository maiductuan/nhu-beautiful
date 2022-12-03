@extends('master')
@section('title','Trang chủ')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('../screen/img/carousel-1.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Massage Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{url('/booking')}}">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('../screen/img/carousel-2.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{url('/booking')}}">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{asset('../screen/img/carousel-3.jpg')}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Cellulite Treatment</h3>
                            <p class="mx-md-5 px-5">Lorem rebum magna dolore amet lorem eirmod magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum labore diam</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{url('/booking')}}">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('../screen/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
                    <p class="pl-4 border-left border-primary">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd erat duo eos et erat</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>Spa & Beauty Services</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
          @foreach($ListService as $LService) 
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{asset('../upload/images/')}}/{{$LService->image}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">{{$LService->name}}</h4>
                    <p class="text-white px-3 mb-3">{{$LService->description}}</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{url('/booking')}}">Make Order</a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('../screen/img/opening.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <ul class="list-inline">
                          @foreach($ListOpenHours as $LOpenHours) 
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>{{$LOpenHours->start_date}} – {{$LOpenHours->end_date	}} : {{$LOpenHours->start_time}} - {{$LOpenHours->end_time}}</li></a>
                          @endforeach
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('../screen/img/pricing.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div class="owl-carousel pricing-carousel">
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Basic Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">Family Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                                    </h1>
                                    <h5 class="text-primary text-uppercase m-0">VIP Plan</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Full Body Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Deep Tissue Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Hot Stone Massage</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Tissue Body Polish</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Foot & Nail Care</p>
                                    <a href="" class="btn btn-primary my-2">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Spa & Beauty Specialist</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('../screen/img/team-1.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('../screen/img/team-2.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('../screen/img/team-3.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{asset('../screen/img/team-4.jpg')}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Blog</h1>
                </div>
            </div>
            <div class="row">
              @foreach($bloglist as $bloglist) 
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="../upload/images/{{$bloglist->blog_image}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">{{$bloglist->cat_name}}</h5>
                                <p class="m-0">{{$bloglist->blog_title}}</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#">Đọc bài</a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- blog End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('../screen/img/testimonial.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Testimonial</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{asset('../screen/img/testimonial-1.jpg')}}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{asset('../screen/img/testimonial-2.jpg')}}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="{{asset('../screen/img/testimonial-3.jpg')}}" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h6 class="text-uppercase">Client Name</h6>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="m-0">Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam  sed clita dolore eos dolores magna erat dolore sed stet justo et dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
      <!-- slider section -->
      <section class=" slider_section position-relative"  style="background: chocolate;">
        <div class="container">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="slider_item-box">
                  <div class="slider_item-container">
                    <div class="slider_item-detail">
                      <h1>
                        Thiết kế website, logo, bộ nhận diện thương hiệu
                      </h1>
                      <p>
                        Marketers/advertisers usually focus their efforts on the
                        people responsible for making the purchase.
                      </p>
                      <div>
                        <a href="">
                          Liên hệ ngay
                        </a>
                      </div>
                    </div>
                    <div class="slider_item-imgbox">
                      <img src="{{asset('../screen/images/pc-banner.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="slider_item-box">
                  <div class="slider_item-container">
                    <div class="slider_item-detail">
                      <h1>
                        PROVIDES TO MAKE BETTER SOFTWARE
                      </h1>
                      <p>
                        Marketers/advertisers usually focus their efforts on the
                        people responsible for making the purchase.
                      </p>
                      <div>
                        <a href="">
                          Download
                        </a>
                      </div>
                    </div>
                    <div class="slider_item-imgbox">
                      <img src="{{asset('../screen/images/pc-banner.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="slider_item-box">
                  <div class="slider_item-container">
                    <div class="slider_item-detail">
                      <h1>
                        PROVIDES TO MAKE BETTER SOFTWARE
                      </h1>
                      <p>
                        Marketers/advertisers usually focus their efforts on the
                        people responsible for making the purchase.
                      </p>
                      <div>
                        <a href="">
                          Download
                        </a>
                      </div>
                    </div>
                    <div class="slider_item-imgbox">
                      <img src="{{asset('../screen/images/pc-banner.png')}}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="sr-only">Next</span>
        </a>
      </section>
      <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
          Dịch vụ
        </h2>
      </div>

      <div class="container">
        <div class="about_card-container layout_padding2-top">
          <div class="about_card">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box">
                  <img src="{{asset('../screen/images/work1.png')}}" alt="" />
                </div>
              </div>
              <div class="card_detail-ox">
                <h4>
                  Dịch vụ Facebook
                </h4>
                <p>
                  Tăng like bài viết, tăng comment, biểu tượng cảm xúc,
                  tăng follow trang cá nhân
                </p>
                <a href="{{url('service-facebook/list')}}" class="btn btn-outline-primary">Mua ngay</a>
              </div>
            </div>
          </div>
          <div class="about_card">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box">
                  <img src="{{asset('../screen/images/work2.png')}}" alt="" />
                </div>
              </div>
              <div class="card_detail-ox">
                <h4>
                  Thiết kế website
                </h4>
                <p>
                  Thiết kế website đa nghành nghề, đa lĩnh vực,
                  thiết kế website bán hàng, website giới thiệu công ty, bất động sản, tin tức
                </p>
                <a href="{{url('service-facebook/list')}}" class="btn btn-outline-primary">Mua ngay</a>
              </div>
            </div>
          </div>
          <div class="about_card">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box">
                  <img src="{{asset('../screen/images/work3.png')}}" alt="" />
                </div>
              </div>
              <div class="card_detail-ox">
                <h4>
                  Marketing
                </h4>
                <p>
                  Hỗ trợ quảng cáo, seo và lên nội dung cho nghành nghề lĩnh vực của bạn
                </p>
                <a href="{{url('service-facebook/list')}}" class="btn btn-outline-primary">Mua ngay</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- who section -->
    <section class="who_section">
      <div class="container who_container">
        <div class="who_img-box">
          <img src="{{asset('../screen/images/pc.jpg')}}" alt="" />
        </div>
        <div class="who_deail-box">
          <h2>
            Who is Newsoft
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris Lorem
            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodonisi ut aliquip ex ea commodo
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end who section -->

    <!-- feature section  -->
    <section class="feature_section layout_padding">
      <div class="container">
        <h2 class="text-uppercase">
            Dịch vụ thiết kế website đa ngành nghề, lĩnh vực
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2">
          <div class="feature_card">
            <div class="feature_img-container">
              <div class="feature_img-box">
                <img src="{{asset('../screen/images/f1.png')}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                Thiết kế website giới thiệu công ty
              </h4>
              <p>
              Mảng chính tại Mona Media, chuyên thiết kế web cho doanh nghiệp, giới thiệu công ty các lĩnh vực với đặc điểm nhận diện riêng, nổi bật và không thể thiếu những tính năng phù hợp với từng loại website, từng mục đích
              </p>
            </div>
          </div>
          <div class="feature_card">
            <div class="feature_img-container">
              <div class="feature_img-box">
                <img src="{{asset('../screen/images/f2.png')}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                Thiết kế website bán hàng
              </h4>
              <p>
              Sang trọng, nổi bật và tích hợp tính năng đặt phòng, booking hoàn hảo là điều tạo nên 1 website khách sạn - nhà hàng tuyệt vời - bạn dễ dàng tích hợp Booking với bên thứ 3 và thanh toán Online để khách hàng đặt cọc. Tất nhiên tính năng chuẩn SEO và di động luôn là tiêu chí được đảm bảo.
              </p>
            </div>
          </div>
          <div class="feature_card">
            <div class="feature_img-container">
              <div class="feature_img-box">
                <img src="{{asset('../screen/images/f3.png')}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                Thiết kế website khách sạn
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse
              </p>
            </div>
          </div>
          <div class="feature_card">
            <div class="feature_img-container">
              <div class="feature_img-box">
                <img src="{{asset('../screen/images/f4.png')}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                Thiết kế website trường học
              </h4>
              <p>
              Hệ thống website học trực tuyến đầu tiên và duy nhất tại Việt Nam giúp bạn bán khóa học Online, dạy học Live Stream mà không phụ thuộc vào đơn vị trung gian. Đặc biệt là hệ thống chống Download độc quyền bảo vệ các Video của bạn. Thành công của chúng tôi là đã thiết kế web Elearning cho hơn 50+ đơn vị, cá nhân.
              </p>
            </div>
          </div>
          <div class="feature_card">
            <div class="feature_img-container">
              <div class="feature_img-box">
                <img src="{{asset('../screen/images/f4.png')}}" alt="" />
              </div>
            </div>
            <div class="feature_detail-box">
              <h4>
                Thiết kế website tin tức
              </h4>
              <p>
              Bạn sẽ sở hữu 1 toàn soạn báo Online, hoặc trang tin tức - báo điện tử thu hút người dùng, Cập nhập thông tin nhanh chóng, tiếp cận đọc giả ngay và hơn hết là khả năng kiếm thêm thu nhập với Ads và đặt banner quảng cáo. Tính năng phân quyền cho tác giả đăng bài và quản trị cực kỳ dễ dàng trên website.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- end feature section -->
     <!-- template website section  -->
     <section class="feature_section layout_padding" >
      <div class="container">
        <h2 class="text-uppercase">
          Mẫu Website nổi bật
        </h2>
      </div>
      <div class="">
        <div class="feature_card-container layout_padding2" >
          @foreach($listtemplate as $listtem) 
          <div class="feature_card" style="width: 436px !important;margin: 0 20px !important;">
            <div class="feature_img-container" style="height: 436px !important;">
              <div class="">
              <img style="width:436px;height:436px;object-fit: cover;object-position: 50% 50%;border-radius: 10px;" src="../upload/images/{{$listtem->image}}" alt="" />
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

    <!-- end template website section -->

    <!-- contact section -->
    <section class="contact_section ">
      <div class="container d-flex justify-content-center">
        <h2 class="text-uppercase">
          Get in touch
        </h2>
      </div>
      <div class="container-fluid layout_padding-top">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-10 offset-md-2">
              <div class="contact_img-box">
                <img src="{{asset('../screen/images/form-img.jpg')}}" alt="" />
              </div>
            </div>
          </div>
          <div class="col-md-6 form_bg px-0">
            <div class="col-md-10 px-0">
              <form action="">
                <div class="contact_form-container">
                  <div>
                    <div>
                      <input type="text" placeholder=" Name" />
                    </div>
                    <div>
                      <input type="email" placeholder="  Email" />
                    </div>

                    <div>
                      <input type="text" placeholder=" Phone Number" />
                    </div>

                    <div>
                      <input
                        type="text"
                        placeholder="Message"
                        class="message_input"
                      />
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                      <button type="submit">
                        Send
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->
@endsection