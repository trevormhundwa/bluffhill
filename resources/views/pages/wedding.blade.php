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
                            <h1 class="hero-text">Wedding Parties</h1>
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
                    <h2 class="welcomeText"><strong><span class="firstLetter">W</span>edding Parties</strong></h2>
                    <p>
                        With the vast experience that our staff possess we can help you plan the best wedding reception one can think of. Creativity within our company has helped us establish a competitive stance towards such events. We have a wide selection of linings and trimmings for our marquees, and the range is constantly updated monthly to  help keep up with the latest fashion trends. We have different equipments for different occasions so as to satisfy  different cultures & taste, Starlit ceilings, coloured roof linings and drapes all helpcreate an everlasting atmosphere. BHS offers you beautiful outlines of different receptions and we also help develop your idea of an ideal reception based on your opinions. We go that extra mile in helping you turn that reception into a Royal Occasion.

                    </p>
                    <p>
                        Whether your dream wedding is a lavish celebration or an intimate gathering, we can help you plan each element of your unique event from concept to completion, keeping you very much involved (or not if you prefer!).

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
                        <p>You can browse some of our previous wedding parties</p>
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