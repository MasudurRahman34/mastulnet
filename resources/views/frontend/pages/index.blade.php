@extends('frontend.layouts.master')

@section('content')
<link rel="stylesheet" href="https://allyoucan.cloud/cdn/fontawesome/5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<div class="header_banner">
    <div class="container">
        <h1 class="lgt ">Become a <span class="clr_red typewrite" data-period="500" data-type='[ "Sponsor", "Volunteer", "Member" ]'></span></h1>
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
      <div style="margin-top:20px"></div>
        <div class="page_section_heading  bg_grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">
                            <button class="text-uppercase btn btn-primary"><h4>OUR SUPPORTERS</h4></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="children_slider  bg_grey">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="children_slider owl-carousel">
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="https://cdn.pixabay.com/photo/2015/08/10/19/08/portrait-883005_960_720.jpg" width="200" height="200" alt="Carousel_Images">
                                </div>
                            </div>
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="https://images.unsplash.com/photo-1473280025148-643f9b0cbac2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1510&q=80" width="200" height="200" alt="Carousel_Images">
                                </div>
                            </div>
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="images/article_1.jpg" width="200" height="200" alt="Carousel_Images">
                                </div>
                            </div>
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="https://cdn.pixabay.com/photo/2015/08/10/19/08/portrait-883005_960_720.jpg" width="200" height="200" alt="Carousel_Images">
                                </div>
                            </div>
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="images/article_3.jpg" width="200" height="200" alt="Carousel_Images">
                                </div>
                            </div>
                            <div class="single_children_item text-center">
                                <div class="children_carousel_img">
                                    <img src="images/article_1.jpg" width="200" height="200" alt="Carousel_Images">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://allyoucan.cloud/cdn/jquery/core/3.4.1/jquery.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
                jQuery(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    nav: true,
                    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                    dots:false,
                    loop:true,
                    margin:10,
                    // center: true,
                    animateOut: 'fadeOut',
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:false,
                    smartSpeed: 1000,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                })
            });
        </script>
        @endsection