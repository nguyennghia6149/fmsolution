<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    
    <title>FM Solution - @yield('title')</title>
    @section('link')
        @yield('meta')
        @yield('head')
    @show
</head>
<body>
    <div id="wrapper">
        @yield('header')

        @yield('main-content')

        @yield('footer')
    </div>
    
    <!-- include script -->
    <section class="footer-inc-script">
        @yield('script')
    </section>
</body>
</html>