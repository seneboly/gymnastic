@extends('layout.app')

@section('title', 'Fitness Zone | Contact')



@section('content')


	 <!-- Start Inner Banner area -->
<div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li class="active">{{strtoupper('Contact')}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@if(session('class'))
    <div class="pb-5 pt-5">
        @include('message.message')
    </div>
@endif 
<!-- End Inner Banner area -->
<!-- Start Contact page area -->
<div class="about-gymedge-area padding-top">
    <div class="container">
       
        <div class="row">

            <div class="col-lg-5 col-md-5 col-sm-5">
                <form class="form-horizontal contact-form" method="POST" action="{{route('sendEmail')}}"  role="form">
                <fieldset>
                    @csrf
                <!-- Form Name -->
                <h5>Merci de laisser un message pour toute information supplémentaire.</h5>

                <!-- Text input-->
                <div class="form-group">
                    <label class="control-label pull-left" for="textinput1"><i class="fa fa-user" aria-hidden="true"></i></label> 
                    <div class="media-body">
                        <input id="form-name" name="name" placeholder="Nom Complet" class="form-control input-md" type="text" data-error="Name field is required" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="control-label pull-left" for="textinput2"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>  
                    <div class="media-body">
                        <input id="form-email" name="email" placeholder="E-mail" class="form-control input-md" type="text" data-error="E-mail field is required" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="control-label pull-left" for="textinput3"><i class="fa fa-phone" aria-hidden="true"></i></label>
                    <div class="media-body">
                        <input id="form-phone" name="phone" placeholder="Telephone" class="form-control input-md" type="text" data-error="le telephone est obligatoire" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="control-label arealebel pull-left" for="textarea"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                    <div class="media-body">                     
                        <textarea class="textarea form-control" id="form-message" name="content" placeholder="Message" data-error="Message field is required" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group send-button">
                  <div class="media-body">
                    <button type="submit" class="btn-read-more-fill btn-send">Envoyer</button>
                  </div>
                </div>
                <div class='form-response'></div>

                </fieldset>
                </form>
            </div>

            <div class="col-lg-7 col-md-7 col-sm-7">
                <div  style="width:100%;height:485px;">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.5914115856867!2d-17.464338586090047!3d14.735677489716549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d4ec957ea6b%3A0xe0de306ee50dc715!2sRue%20GY%20136%2C%20Dakar!5e0!3m2!1sfr!2ssn!4v1579041510746!5m2!1sfr!2ssn" style="width: 100%;  height: 485px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact page area -->
<!-- Start logo showcase area -->
<div class="logo-showcase-area nav-on-focus">
    <div class="container">
        <div class="gym-carousel nav-control-middle-opacity"
            data-loop="true"
            data-items="6"
            data-margin="30"
            data-autoplay="false"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="true"
            data-nav-speed="false"
            data-r-x-small="2"
            data-r-x-small-nav="true"
            data-r-x-small-dots="false"
            data-r-x-medium="3"
            data-r-x-medium-nav="true"
            data-r-x-medium-dots="false"
            data-r-small="4"
            data-r-small-nav="true"
            data-r-small-dots="false"
            data-r-medium="5"
            data-r-medium-nav="true"
            data-r-medium-dots="false"
            data-r-large="6"
            data-r-large-nav="true"
            data-r-large-dots="false">
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/1.jpg')}}" alt="client1"></a>
                </div>
            </div>
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/2.jpg')}}" alt="client2"></a>
                </div>
            </div>
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/3.jpg')}}" alt="client3"></a>
                </div>
            </div>
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/4.jpg')}}" alt="client4"></a>
                </div>
            </div>
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/5.jpg')}}" alt="client5"></a>
                </div>
            </div>
            <div class="single-logo-area">
                <div class="single-logo">
                    <a href="#"><img src="{{asset('template/img/client/6.jpg')}}" alt="client6"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection