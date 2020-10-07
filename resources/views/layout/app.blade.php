<!doctype html>
<html class="no-js" lang="fr">

<head>

   @include('partials.header')
</head>

<body>
    <!-- Start wrapper -->
    <div class="wrapper">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Preloader Start Here -->
       {{--  <div id="preloader"></div>  --}}
        <!-- Preloader End Here -->
        <!-- Start Header area -->
        <header class="main-header header-style1" id="sticker">
           @include('partials._header')
        </header>
        <!-- End Header area -->
        <!-- Main Banner area -->
        <div class="row">   
            @yield('content')
        </div>
        <!-- End logo showcase area -->
        <!-- Start footer Area -->
        <footer>
            @include('partials.footer')

            
</body>

</html>
