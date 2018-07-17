<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/revolution-slider.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/assets/css/responsive.css" rel="stylesheet">
    @yield('styles')
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/assets/js/respond.js"></script><![endif]-->
{{-- 
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png"> --}}
</head>

<body>
    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <!--Header top area-->
        <header class="main-header header-style-one">
            <section class="mainmenu-area">
                @include('includes.nav')
            </section>
            <!--Main-Mane-->
            <section class="bounce-in-header">
                @include('includes.nav')
            </section>
            <!--/Main-Menu-->
        </header>
        <!-- ================================= Banner ====================== -->
       @yield('pageContent')
       
        <!--/contact-seciton-->
        <!--.news-seciton-->
        <div class="news-seciton">
            <div class="container">
                <div class="row">
                <hr>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="news-text">
                            {{-- <h4>Newsletter Sign-up</h4>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p> --}}
                            
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        {{-- <div class="news-form">
                            <input type="text" name="lastname" placeholder="Full Name" value="">

                            <input type="email" name="email" placeholder="Email" value="">
                            <button type="submit" class="btn news-btn">send</button>
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>
        <!--/news-seciton-->  
        <!--.footer-section-->
        @include('includes.footer')
    <!--/footer-section-->

    </div>
    <!--Page Wrapper End-->

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/revolution.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    @yield('scripto')
</body>
</html>