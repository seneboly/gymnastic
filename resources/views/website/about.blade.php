@extends('layout.app')

@section('title', 'Fitness Zone | A propos')

@section('content')
	 <!-- Start Inner Banner area -->
<!-- Start Inner Banner area -->
<div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li class="active">A PROPOS</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Inner Banner area -->
<!-- Start About gymedge area -->
<div class="about-gymedge-area padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7 col-sm-7">
                <div class="about-content-area">
                    <div class="title-section">
                        <h2><span class="color-red">FITNESSZONE</span><span class="color"></span></h2>
                    </div>
                    <div class="content-section">
                        <p>Quisque et lectus pulvinar, porttitor mi non, elementum dui. Morbi mi nisl, tincidunt sed venenatis eget, finibus eu mauris. Nullam nisi lacus, feugiat eget varegeellentesque dictum odio. Sed sollicitudin viverra est, at aliquam metus ultrices id. Duis eu purus vel nisl commodo facilisis vitae ut lectus. Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massa. Fusce dolor velit, blandit ac erat ac, vestibulum ornare diam. Sed sollicitudin viverra est, at aliquam metu eratys ultrices  tristique massaid.diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massa. Fusce dolor velit, blandit ac erat ac, vestibulum ornare diam. Sed sollicitudin viverra.</p>
                    </div>
                    <div class="content-list">
                        <p><span><i class="fa fa-check" aria-hidden="true"></i>We have Gym Trainer</span></p>
                        <p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massdolor velit, blandi.</p>
                        <p><span><i class="fa fa-check" aria-hidden="true"></i>Modern Gym & Fitness Facilities</span></p>
                        <p>Sed elementum dapibus tellus, a dictum metus interdum ac. Nullam condimentum, dui volutpat fringilla molestie, libero tortor ultrices lorem, at tempus diam purus non velit. Aliquam vel nulla eleifend, consequat elit id, tristique massdolor velit, blandi.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-sm-5">
                <div class="about-img">
                    <img class="img-responsive" src="{{asset('template/fitnessZone/79397834-43d9-4a4b-931c-fb3fe410eeaa.jpg')}}" alt="about-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About gymedge area -->
<!-- Start Why choose us area -->

<!-- End Why choose us area -->
<!-- Start what clients say area  -->

<!-- End what clients say area -->
<!-- Start Expert trainers area -->
<div class="expert-trainer-area padding-space nav-on-hover">
    <div class="container">
        <h2>Notre equipe</h2>
    </div>
    @include('inc.website_elements.experts_trainers')
</div>
<!-- End Expert tainers area -->
<!-- Start logo showcase area -->


@endsection