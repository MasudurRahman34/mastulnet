@extends('frontend.layouts.master')

@section('content')
<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" />
<div class="header_banner">
    <div class="container">
        <h1 class="text-center lgt ">Become a <span class="clr_red typewrite" data-period="500" data-type='[ "Sponsor", "Volunteer", "Member" ]'></span></h1>
        <span class="wrap"></span>
    </div>
</div>
<!--Header banner section end-->
<!--Our course section start-->
<div class="our_courses bg_grey">
    <div class="container">
        <div class="row dis_table">
            @foreach ($courseitem as $courseitem)
            <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                <div class="our_course_item border_rad_5">
                    <a href="{!! route('singlecourse.show', $courseitem->slug) !!}">
                        <img src="{{ asset('images/courseimage/'.$courseitem->imagefile) }}" alt="course">
                    </a>
                    <div class="caption">

                        <h3 class="bold font_s_20">{{$courseitem->course_name}}</h3>
                        <p>{{$courseitem->title}}</p>
                        <p>{{$courseitem->description}}</p>
                        <a href="{{ route('singlecourse.show', $courseitem->slug) }}"><i class="icofont-rounded-right"></i> waitng 204 days</a>
                    </div>
                </div>
            </div>
            @endforeach
                </div>
            </div>
        </div>
        <!--Our course section end-->
        <!--Our course banner section start-->
        <div class="course_banner">
            <div class="container">
                <div class="course_banner_content">
                    <h1 class="text-center lgt">Donate A Poverty-Stricken Child <span class="clr_red bold">Tk 3,000</span> Only</h1>
                    <button class="how_lern bold bg_trans border_circle"><i class="icofont-play-alt-1"></i> Our Contribution </button>
                    <button class="bg_red border_none clr_white bold border_circle text-uppercase join_us">Join Now</button>
                </div>
            </div>
        </div>
        <!--Our course banner section end-->
        <!--Emergency article section start-->
        <div class="emergency_article bg_grey">
            <div class="container">
                <h1 class="lgt text-center">Recent News & Events</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                    <p>Graphic design is the process of visual communication and problem-solving through the use of typography, photography and illustration.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_2.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">About UX Design</h3>
                                    <p>User experience design (UX, UXD, UED or XD) is the process of enhancing user satisfaction with a product by improving the usability, in the interaction the product.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_3.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">Future Of Web Development</h3>
                                    <p>Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network) social network services.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="emergency_article">
            <div class="container">
                <h1 class="lgt text-center">Latest Donations</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article2 border_rad_5">

                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white" style="text-align: center;">
                                    <h3 class="font_s_20">Antory islam (CEO)</h3> 
                                    <h4 class="font_s_15"> RPAC</h4>
                                    <p>job details job details job details job details job details job details job details job details</p>
                                    <p style="color: red">Amount 3000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article2 border_rad_5">

                                <img src="images/article_1.jpg" alt="img">
                               <div class="article_details2 bg_white" style="text-align: center;">
                                    <h3 class="font_s_20">Antory islam (CEO)</h3> 
                                    <h4 class="font_s_15"> RPAC</h4>
                                    <p>job details job details job details job details job details job details job details job details</p>
                                    <p style="color: red">Amount 3000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white" style="text-align: center;">
                                    <h3 class="font_s_20">Antory islam (CEO)</h3> 
                                    <h4 class="font_s_15"> RPAC</h4>
                                    <p>job details job details job details job details job details job details job details job details</p>
                                    <p style="color: red">Amount 3000</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="emergency_article">
            <div class="container">
                <h1 class="lgt text-center">Our patners</h1>
                <div class="owl-carousel owl-theme">
                    <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                  
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                  
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                     <div class="ml-2 mr-2">
                        <a href="#">
                            <div class="article2 border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details2 bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                   
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <script src=" {{asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items:5,
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                autoplayHoverPause:true
            });

        </script>
        @endsection