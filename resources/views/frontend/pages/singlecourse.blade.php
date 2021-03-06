@extends('frontend.layouts.master')

@section('content')


<section class="section-separator">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_heading text-center">
                            <h2>Sponsor a Child in need</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque laboriosam esse assumenda dolorem qui quo illo commodi minus sapiente ad!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="child_profile">
                            <img src="{{ asset('images/courseimage/'.$courseitem->imagefile)}}" alt="" height="200px" width="200px">
                            <button class="btn btn-primary btn-sm page-btn">Sponor me</button>
                            <h4>{{$courseitem->course_name}}</h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="child_profile_info fix-padding">
                                    <button class="btn btn-primary btn-sm page-btn">Child Say's</button>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <div class="red_moor_btn text-right">
                                        <a href="#">red more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="child_profile_info">
                                    <button class="btn btn-primary btn-sm page-btn">Personal info</button>
                                    <div class="personal-info clearfix">
                                        <div>
                                            <p>Birth Day</p>
                                            <p>Age</p>
                                            <p>Id</p>
                                            <p>Place</p>
                                        </div>
                                        <div id="border-left">
                                            <p>2002-12-27</p>
                                            <p>10 years</p>
                                            <p>28172</p>
                                            <p>Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="child_profile_info">
                                    <button class="btn btn-primary btn-sm page-btn">Dream</button>
                                    <div class="personal-info">
                                        <h4>Police</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="child_profile_info personal-info-img">
                                    <button class="btn btn-primary btn-sm page-btn">Video</button>
                                    <div class="personal-info">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5"><button class="btn_cus join_us clr_white bg_red border_none border_circle bold text-uppercase full_width_480" data-toggle="modal" data-target=".bs-example-modal-lg">Donate Now</button></div>

                </div>
            </div>
        </section>

{{-- <div class="single_course">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8" style="margin-top: 10px">
                        <div class="course_name clr_white">
                                <img src="{{ asset('images/courseimage/'.$courseitem->imagefile)}}" alt="course">
                            <div class="course_details">
                                <h3 class="bold"></h3>
                                <p>{{$courseitem->course_name}} <br>20 Class , 5 Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="margin-top: 10px">
                        <div class="learning_list bg_red">
                            <h4 class="font_s_20 clr_white">What Your Sponsor Child Will Recieve ?</h4>
                            <ul class="list-unstyled clr_white">
                                <li><i class="icofont-circled-right"></i>Monthly Education Stipend</li>
                                <li><i class="icofont-circled-right"></i> School Uniform, Bag, Shoes</li>
                                <li><i class="icofont-circled-right"></i> Text Book, Exercise Book, Drawing Book</li>
                                <li><i class="icofont-circled-right"></i> Nutritions Food</li>
                                <li><i class="icofont-circled-right"></i> Health Checkup</li>
                            </ul>

                            
                            @auth("web") 
                            
                             {{ $user = Auth::User()->id}}
                             



                             <button class="border_none clr_white font_s_20 text-center border_circle" data-toggle="modal" data-target=".bs-example-modal-lg"> full Access <i class="icofont-rounded-right"></i></button>
                            @endauth
                            @auth("admin")
                            You're an administrator!
                            @endauth

                            @guest
                            <button class="border_none clr_white font_s_20 text-center border_circle" data-toggle="modal" data-target=".bs-example-modal-lg">Donate Now <i class="icofont-rounded-right"></i></button>
                            @endguest --}}


                          {{-- {{ (isset(Auth::user()->name)) ? Auth::user()->name : 'Profile' }} --}}
                                 
                        
                           
                        {{-- </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Course title section end-->
        <!--Videos section start-->
        <div class="videos_tutorials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="tutorial_title">
                            <h2 class="lgt">Start Learning</h2>
                            <p>11 Video Class</p>
                        </div>
                        @foreach ($courseitem->files as $file)
                        @switch($file->stasus)
                         @case(0)
                        <div class="play_list bg_grey border_rad_5">
                            <div class="play_icon">
                                <i class="icofont-play-alt-1 clr_red"></i>
                            </div>
                            <div class="video_name">
                                <a href="{{$file->vediofile}}" class="font_s_20">{{$file->vedio_title}} </a>
                                <p>{{$file->vedio_duration}}</p>
                            </div>
                            <div class="priview_btn">
                                <button class="clr_red bg_trans border_circle border_red" data-toggle="modal" data-target="#video{{$file->id}}"></i> preview
                                </button>
                                <!--Header video here-->
                                <div class="modal fade video_modal" id="video{{$file->id}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4 class="font_s_20 bold">{{$file->vedio_title}}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="clr_grey" aria-hidden="true">&times;</span></button>
                                                <div class="header_video">
                                                    <iframe src="https://player.vimeo.com/video/{{$file->vediofile}}" width="853" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                    <!-- <p><a href="https://vimeo.com/308736859">BARBEGAZI</a> from <a href="https://vimeo.com/tylerorton">Tyler Orton</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
                                                    



                                                    <!-- //youtube ifame -->
                                                    <!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$file->vediofile}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

                                                    <!-- <video controls loop class="full_width">
                                                        <source src="assets/About XD Interface & UI Kit.mp4" type="video/mp4">
                                                    
                                                    </video> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="clr_red bg_trans border_circle border_red">Preview</button> -->
                            </div>
                        </div>
                        @break

                        @case(1)
                            <div class="play_list bg_grey border_rad_5">
                                <div class="play_icon">
                                    <i class="icofont-play-alt-1"></i>
                                </div>
                                <div class="video_name">
                                    <a href="#" class="font_s_20">{{$file->vedio_title}} </a>
                                    <p class="dis_none">4:57min</p>
                                </div>
                                <div class="priview_btn">
                                    <button class="join_now_pre bg_trans border_circle border_grey" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icofont-lock"></i> Join Now
                                    </button>
                <div class="modal fade PaymentModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg modal_lg" role="document">
                        <div class="container">
                            <div class="modal-content">
                                <button type="button" class="close font_s_30 lgt" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close-line"></i></span></button>
                                <div class="payment_content">
                                    <h1 class="text-center font_s_30"><span class="lgt">To Get Membership </span> Pay Now! <span class="bold clr_red">BDT 3,000</span></h1>
                                    <div class="payment_mathod">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width_599">
                                                <div class="payment_item border_rad_5">
                                                    <div class="payment_icon">
                                                        <img src="images/bkash.jpg">
                                                    </div>
                                                    <div class="payment_number clr_red">
                                                        <h3>01744 245 716</h3>
                                                        <p>(Personal Account)</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width_599">
                                                <div class="payment_item dutch_bangla border_rad_5">
                                                    <div class="payment_icon">
                                                        <img src="images/rocket.jpg">
                                                    </div>
                                                    <div class="payment_number clr_red">
                                                        <h3>01744 245 716</h3>
                                                        <p>(Personal Account)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment_conformation">
                                        <h3 class="lgt text-center">Submit <span class="reg">Transaction ID </span> for Confirmation</h3>
                                        
                                            <p class="font_s_20 clr_lgt_grey">Sent From</p>
                                            <div class="row dis_tabl">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 dis_tbl_cle">
                                                    <div class="mrgn_tp_20 chaekbutton">
                                                        <ul>
                                                            <li class="radio radio-warning disply_block">
                                                                <input type="radio" name="radio1" id="radio1" value="option1">
                                                                <label for="radio1" class="font_s_20">bKash</label>
                                                            </li>
                                                            <li class="radio radio-warning disply_block">
                                                                <input type="radio" name="radio1" id="radio4" value="option1">
                                                                <label for="radio4" class="font_s_20">Rocket</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dis_tbl_cle">
                                                    <div class="form-group full_width">
                                                        <input type="text" class="form-control border_grey_lgt box_shadow_none font_s_20" id="TransactionId" placeholder="Transaction ID">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dis_tbl_cle">
                                                    <button type="submit" class="btn_cus bg_red border_rad_5 text-uppercase border_trns full_width bold clr_white">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                                </div>
                            </div>
                        @break
                        @default
                                
                    @endswitch
                @endforeach
                        
                      
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sideber_post">
                            <a href="#" class="post_item">
                                <div class="post_img">
                                    <img src="{{ asset('images/post_1.png') }} " alt="img">
                                </div>
                                <div class="post_details">
                                    <h4 class="font_s_20 clr_red_deep">Complete Guide for Learn</h4>
                                    <p>Learn easily and relaxedly</p>
                                </div>
                            </a>
                            <a href="#" class="post_item">
                                <div class="post_img">
                                    <img src="{{ asset('images/post_2.png') }}" alt="img">
                                </div>
                                <div class="post_details">
                                    <h4 class="font_s_20 clr_red">Daily Live Support</h4>
                                    <p>We are here to solve your problems</p>
                                </div>
                            </a>
                            <a href="#" class="post_item">
                                <div class="post_img">
                                    <img src="{{ asset('images/post_3.png') }}" alt="img">
                                </div>
                                <div class="post_details">
                                    <h4 class="font_s_20 clr_red">Get a Certificate</h4>
                                    <p>Achieve a Completion Certificate</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Videos section end-->
        <!--Our course section start-->
        <div class="our_courses bg_grey">
            <div class="container">
                <h1 class="lgt">Related subject</h1>
                <div class="row dis_table">
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <img src=" {{ asset('images/ui_ux_designer.jpg') }}" alt="course">
                            <div class="caption">
                                <h3 class="bold font_s_20">Become a UI/UX Designer</h3>
                                <p>UI UX Design Master Course with Live Support,</p>
                                <a href="#"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <img src="{{ asset('images/mobile_app.jpg') }}" alt="course">
                            <div class="caption">
                                <h3 class="bold font_s_20">Become a Mobile App Designer</h3>
                                <p>Mobile App Design Course with Live Support</p>
                                <a href="#"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <img src="{{ asset('images/adobe_xd.jpg') }}" alt="course">
                            <div class="caption">
                                <h3 class="bold font_s_20">Learn Adobe XD Easily*</h3>
                                <p>Adobe Experience Design (XD)for Good Skill on UX UI Design with  Live Support, </p>
                                <a href="#"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <img src="{{ asset('images/graphic_designer.jpg') }}" alt="course">
                            <div class="caption">
                                <h3 class="bold font_s_20">Graphic Design Course for Begenner</h3>
                                <p>Graphic & Creative Design Master Course with  Live Support</p>
                                <a href="#"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 --}}
@endsection