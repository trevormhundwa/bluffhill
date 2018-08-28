<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bluffhill Hiring | Event Management</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{asset('fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{asset('fontello/css/fontello.css')}}" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="{{asset('css/owl.carousel.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/owl.theme.default.css')}}" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <!-- Style CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- header-top -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                <div class="header-text">
                    <p class="wlecome-text">14 Faber Rd, Blufhill, Harare </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                <div class="header-text text-right">
                    <p><span class="fa fa-phone"></span>  0772110548 ; 0772580625</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.header-top -->
<!-- header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                <!-- header-logo -->
                <div class="header-logo">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                </div>
                <!-- /.header-logo -->
            </div>
            <div class="col-xl-7 offset-xl-1 col-lg-8 col-md-6 col-sm-12 col-12">
                <!-- navigations -->
                <div id="navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a>
                            <ul>
                                <li>
                                    <a href="/corporate-events" title="">Corporate Events</a>
                                </li>
                                <li>
                                    <a href="/private-parties" title="">Private Parties</a>
                                </li>
                                <li>
                                    <a href="/wedding-parties" title="">Wedding Parties</a>
                                </li>
                                <li>
                                    <a href="/catering" title="">Catering</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>

                    </ul>
                </div>
                <!-- /.navigations -->
            </div>
        </div>
    </div>
</div>
<!-- /.header -->

@yield('hero')

@yield('content')


<!-- footer-section -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <!-- footer-widget -->
                <div class="footer-widget">
                    <a href="#"><img src="{{asset('images/footer-logo.png')}}" alt="" class="mb20"></a>
                    <p class="mb10">Bluffhill is both an event management company, and a party planning resource - designed to help you organise your event in a whole, or in part.</p>
                </div>
            </div>
            <!-- /.footer-widget -->
            <!-- footer-widget -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footer-widget">
                    <h3 class="widget-title">
                        Contact Address
                    </h3>
                    <p>14 Faber Rd, Bluffhill
                        <br>Harare</p>
                    <p class="mb0 text-default">0772580625</p>
                    <p class="mb0 text-default">bhshire@mweb.co.zw</p>
                </div>
            </div>
            <!-- /.footer-widget -->
            <!-- footer-widget -->
            <div class="col-xl-2 col-lg-1 col-md-4 col-sm-6 col-12">
                <div class="footer-widget">
                    <h3 class="widget-title">
                        About Company
                    </h3>
                    <ul class="listnone">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Meet The Team</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-widget -->
            <!-- footer-widget -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="footer-widget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3799.189006690395!2d30.986745314881844!3d-17.7828120878428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931af532077f1bf%3A0x4328f3568c50f8c1!2s14+Faber+Rd%2C+Harare!5e0!3m2!1sen!2szw!4v1532560690133" width="100%" max-height="190" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- /.footer-widget -->
        </div>
    </div>
</div>
<!-- tiny-footer-section -->
<div class="tiny-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                <p>© 2018 RealWed. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- /.tiny-footer-section -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

<script src="{{asset('js/jquery.fireworks.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/menumaker.min.js')}}"></script>
<!-- owl-carousel js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- nice-select js -->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/custom-script.js')}}"></script>
<script src="{{asset('js/return-to-top.js')}}" ></script>
</body>

</html>