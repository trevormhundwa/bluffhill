@extends('layouts.main')

@section('hero')
    <!-- hero-section -->
    <div class="hero-section">
        <div class="">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12" style="z-index: 99" >
                    <!-- search-block -->
                    <div class="search-block">
                        <div class="search-head text-center">
                        <h1 class="welcomeText">
                            <strong><span class="firstLetter">C</span>orporate <span class="firstLetter">E</span>Events </strong>
                            <br>
                            <a href="#" class="btn btn-primary submitButton"  data-toggle="modal" data-target="#exampleModal">Get in touch</a>

                        </h1>
                        
                    <!-- Modal -->
                    @component('components.modal')
                    
                    @endcomponent

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

    <!-- feature-section -->
    <div class="bg-white space-small">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mb20">
                    <img src="{{asset('images/champagne.jpg')}}" alt="" class="img-fluid champagne-pic">
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mb20">
                    <h2 class="welcomeText"><strong><span class="firstLetter">C</span>orporate Events</strong></h2>
                    <p>
                        For many businesses, wasting valuable time and staff organising corporate events is simply not cost effective – especially when employees often have no formal training or expertise. By outsourcing your event to Bluffhill you are guaranteed an expertly produced function that will not only impress, but also quite simply save you money. BLUFFHILL corporate event management services are unrivalled in their professionalism and dedication to your company’s objectives. We are acutely aware that our performance and end result is ultimately a reflection of your own brand identity and corporate image. It is therefore our goal to transcend all expectations, and through our entertainment expertise, present your business in a new light. Our client list is unsurpassed, and our production team and event designers can work with you to produce office parties, seminars, client receptions, and outdoor shows. Our initial consultation is always free, and we would be happy to put together a proposal at any time.


                    </p>
                    <p>
                        Building the perfect corporate event takes time and resources, why not have a look below at some of our past events. For further advise, contact us and we can help you plan an amazing corporate event.
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
                        <p>You can browse some of our previous corporate events</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl-6 col-lg-6 col-sm-6 ">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img">
                                <img src="{{asset('images/conference.jpg')}}" alt="" class="img-fluid img-width">
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
                                        <img src="{{asset('images/corp1.jpg')}}" alt="" class="img-fluid img-width">
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="{{asset('images/corp2.jpg')}}" alt="" class="img-fluid img-width">
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="{{asset('images/corp3.jpg')}}" alt="" class="img-fluid img-width">
                                    </a>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 ">
                            <div class="venue-categories-block zoomimg">
                                <div class="venue-categories-img">
                                    <a href="#">
                                        <img src="http://via.placeholder.com/440x230" alt="" class="img-fluid img-width">
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