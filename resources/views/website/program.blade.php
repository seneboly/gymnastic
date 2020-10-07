@extends('layout.app')

@section('title', 'Fitness Zone | Programme')

@section('content')
	 <!-- Start Inner Banner area -->
<!-- Start Inner Banner area -->
<div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li class="active">{{strtoupper('Programme')}}</li>
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
                        <h2><span class="color-red">PROGRAMME</span><span class="color"></span></h2>
                    </div>
                </div>        
            </div>
        </div>
        <div class="row pb-5 pt-5">
            @include('inc.website_elements.courses')
        </div>
        <div class="row pt-5 pb-5">
            @include('inc.website_elements.schedule')
        </div>
        
    </div>
</div>

<!-- End About gymedge area -->
<!-- Start Why choose us area -->

<!-- End Why choose us area -->
<!-- Start what clients say area  -->

<!-- End what clients say area -->
<!-- Start Expert trainers area -->

<!-- End Expert tainers area -->
<!-- Start logo showcase area -->


@endsection