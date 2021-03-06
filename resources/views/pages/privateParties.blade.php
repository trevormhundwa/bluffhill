@extends('layouts.main')

@section('hero')
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="search-block">
                        <div class="text-center search-head">
                            <h1 class="hero-text">Private Parties</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block">Enquire below about our corporate events</p>
                            <a href="#" class="btn btn-primary submitButton"  data-toggle="modal" data-target="#exampleModal">Get in touch</a>
                        </div>
                        <!-- /.search-block -->
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Get In Touch</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="full name" placeholder="Your Name Here">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="text" class="form-control" id="phoneNum" aria-describedby="phoneNum" placeholder="0772 123 123">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@email.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-secondary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->

@endsection


@section('content')

    <!-- feature-section -->
    <div class="bg-white space-small">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mb20">
                    <img src="http://via.placeholder.com/360x260" alt="" class="img-fluid mb20">
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mb20">
                    <h2 class="welcomeText"><strong><span class="firstLetter">P</span>rivate Parties</strong></h2>
                    <p>
                        Do you have a special day coming up? We provide event management for those special days in your life. We help you create memorable events that will stay with you and your friends for a lifetime. We have private paties that range from 21st birthday parties to 25 year anniversary parties.                    </p>
                    <p>
                        We provide you with tents, chairs, lighting and anything else you require to make the most of your party. Through working together wiith our clients be believe we can create an event that everyone can be proud of
<br>
                        Have a look at some of the events we have hosted below.
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
                        <h2 class="welcomeText mb10"><strong><span class="firstLetter">O</span>ur Past Events</strong></h2>
                        <p>You can browse some of our previous private parties</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl-6 col-lg-6 col-sm-6 ">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                            <a href="#">
                                <img src="http://via.placeholder.com/750x450" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 ">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/350x220" alt="" class="img-fluid">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/350x220" alt="" class="img-fluid">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/350x220" alt="" class="img-fluid">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/350x220" alt="" class="img-fluid">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
            </div>
        </div>
        <!-- /.venue-categoris-section-->
    </div>
@endsection