@extends('layouts.main')

@section('hero')
    <!-- hero-section -->
    <div class="hero-section">
        <div class="">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" style="z-index: 99" >
                    <!-- search-block -->
                    <div class="search-block">
                        <div class="search-head text-center">
                        <h1 class="welcomeText">
                            <strong><span class="firstLetter">E</span>vent <span class="firstLetter">M</span>anagement </strong>
                            <br>
                            <strong class="text-center"><span class="firstLetter">S</span>pecialists </strong>

                        </h1>

                        </div>
                        <!-- /.search-block -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->

@endsection


@section('content')
    <!-- blog-post-section -->
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="post-block text-center">
                        <div class="post-img mb30 zoomimg">
                            <a href="#"><img src="{{asset('images/corporate-nav.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <h4><a href="#" class="title">Corporate Events</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="post-block text-center">
                        <div class="post-img mb30 zoomimg">
                            <a href="#"><img src="{{asset('images/wedding.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <h4><a href="#" class="title">Weddings</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="post-block text-center">
                        <div class="post-img mb30 zoomimg">
                            <a href="#"><img src="{{asset('images/private-party-nav.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <h4><a href="#" class="title">Private Parties</a></h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="post-block text-center">
                        <div class="post-img mb30 zoomimg">
                            <a href="#"><img src="{{asset('images/catering-nav.jpg')}}" alt="" class="img-fluid"></a>
                        </div>
                        <h4><a href="#" class="title">Catering</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.blog-post-section -->

    <!-- feature-section -->
    <div class="bg-white space-small">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-3 col-lg-3 col-sm-12 col-12 mb20">
                    <img src="{{asset('images/flower.png')}}" alt="" class="img-fluid flower-pic">
                </div>
                <div class="col-xl-9 col-lg- col-md-12 col-sm-12 col-12 mb20">
                    <h2 class="welcomeText"><strong><span class="firstLetter">W</span>elcome to Bluffhill Hiring Services</strong></h2>
                    <p>
                        Bluffhill is both an event management company, and a party planning resource - designed to help you organise your event in a whole, or in part. From the minute your enquiry arrives our event management department will work tirelessy to provide you with exactly what you require. Our methodical and systematic planning approach, developed through our existensive reseach with private individuals and corporate clients will ensure that nothing is overlooked. With years of experience operating and organising some of the world's most glamorous parties and prestigious events, we understand that each function we undertake is unique. Each client, each budget, each location and each brief is intrinsically different - and as a result, wherever possible, we tailor our response and our creative skills appropritely.

                    </p>
                </div>
                <!-- /.feature-1 -->
            </div>
        </div>
    </div>
    <!-- /.feature-section -->

    <!-- venue-categoris-section-->
    <div class="space-small">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="welcomeText mb10"><strong><span class="firstLetter">S</span>ervices</strong></h2>
                        <p>You can browse all the services we offer below</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
                    <!-- Modal -->
                    @component('components.modal')
                    
                    @endcomponent
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/flower-arrangement.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Flower Arrangements</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/carpets.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Carpets</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/stages.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Stages</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/lighting.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Lighting</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/chairs.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Chairs</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/tables.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Tables</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/catering.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Catering</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl col-lg col-sm col-xs-6 services-gap">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <img src="{{asset('images/tents.jpg')}}" alt="" class="img-fluid serices-images">
                            </a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#"  data-toggle="modal" data-target="#exampleModal" class="venue-categories-title">Tents</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>                
            </div>
            
        </div>
        <!-- /.venue-categoris-section-->
    </div>


    <!-- feature-section-->
    <div class="bg-white space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="welcomeText mb10"><strong><span class="firstLetter">W</span>hy we stand out</strong></h2>
                        <p>These are the pillars that we incorporate in every event</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Customer Focused</h3>
                            <p>We are focused on helping you realise your dream event. We aim to service your needs</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Reliable Communication</h3>
                            <p>The key to any relationship is  great communication. We believe in keeping our clients informed through out the preparation of the events</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Professional Team</h3>
                            <p>Events are a time to celebrate and enjoy. We provide you piece of mind by providing you with a team of experienced and professional event organisers.</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
            </div>
        </div>
    </div>
    <!-- /.feature-section-->

    <!-- Testimonial-section -->
    <div class="space-medium bg-yellow-light">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="welcomeText mb10"><strong><span class="firstLetter">C</span>ontact Us</strong></h2>
                        <p>Leave us a message and we will get back to you</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="well-box testimonial-block">
                        <form method="post" action="{{route('store')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="full name" placeholder="Your Name Here" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number address</label>
                                <input type="text" class="form-control" name="phoneNum" aria-describedby="phoneNum" placeholder="0772 123 123" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="example@email.com" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea class="form-control" name="msg"rows="3" required></textarea>
                            </div>
                            <button type="submit" id="submit" name="submit" class="btn btn-primary submitButton">test send</button>

                        </form>

                    </div>

                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.189006690395!2d30.986745314881844!3d-17.7828120878428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931af532077f1bf%3A0x4328f3568c50f8c1!2s14+Faber+Rd%2C+Harare!5e0!3m2!1sen!2szw!4v1532560690133" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Testimonial-section -->

    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->


@endsection