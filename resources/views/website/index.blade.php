@extends('layout.app')

@section('title', 'Fitness Zone | Accueil')

@section('content')

<!-- Start wrapper -->
  <div class="wrapper">
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <!-- Preloader Start Here -->
       {{-- <div id="preloader"></div>  --}}
      <!-- Preloader End Here -->
      <!-- Start Header area -->
   
      <!-- End Header area -->
      <!-- Start slider area  -->
      <div class="slider-area slider-top-space-header1 slider1-caption">
          @include('inc.slider')
      </div>
      <!-- End slider area-->
      <!-- Start About fitness area -->
       <!-- Start About fitness area -->
        <div class="about-fitness-area">
            <div class="container-fluid">
                <div class="about-fitness-left">
                    <div class="about-left-img padding-space">
                        <img width="300" src="{{asset('template/images/about-fitness-img.png')}}" class="img-responsive" alt="about-fitness-img">
                        <div class="overly">
                            <h3><span>FITNESS ZONE</span></h3>
                        </div>
                    </div>
                </div>
                <div class="about-fitness-right padding-space">
                    <div class="about-single-service">
                        <div class="media service-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-olympic-weightlifting"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Wight Lifting</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-single-service">
                        <div class="media service-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-people"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Running</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-single-service">
                        <div class="media service-item last-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-exercise"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">Yoga</a></h3>
                                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyy text of the printing and typesetting.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About fitness area -->
        <!-- Start feature classes area -->
        <div class="feature-classes-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>{{Str::title('programme de la semaine')}}</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                @foreach($courses->where('show_in_week_schedule', true)->all() as $cours)
                    <div class="single-product-classes col-md-4">

                        <div class="single-product">
                            @if($cours->cours_img)
                                <a href="#"><img class="img-responsive" style="min-height: 300px; max-height: 300px;" src="{{asset('/storage/app/cours/'.$cours->cours_img)}}" alt="product"></a>
                            @endif
                            <div class="overly">
                                <ul>
                                    <li>@datesimple($cours->heure_cours)</li>
                                    <li>@heure($cours->heure_cours)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="#">{{$cours->course_name}}</a></h3>
                            <span class="author"><i class="fa fa-user"></i>{{$cours->monitor->monitor_name}}</span>
                        </div>
                    </div>
                @endforeach
                   
                </div>
            </div>
        </div>
        <!-- End feature product area -->
      <!-- End feature product area -->
      <!-- Start being body builder area -->
      <div class="being-body-builder  bg-secondary padding-top">
          <div class="container">
              @include('inc.website_elements.beingBodyBuilder')
          </div>
      </div>
      <!-- End being body builder area -->
      <!-- Start class schedule area -->
      <div class="class-schedule">
          <div class="container">
              @include('inc.website_elements.schedule')
          </div>
      </div>
      <!-- End class schedule area -->
      <!-- Start what clients say area  -->
     
      <!-- End what clients say area -->
      <!-- Start Expert trainers area -->
      <div class="expert-trainer-area nav-on-hover">
          <div class="container">
              <div class="section-title col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                  <h2 >MONITEURS</h2>
              </div>
          </div>
          @include('inc.website_elements.experts_trainers')
      </div>
      <!-- End Expert tainers area -->
      <!-- Start Price Table area -->
      <div class="price-table-area">
          <div class="container">
              <div class="section-titl col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                  <h2 class="text-white">LES TARIFS</h2>
              </div>
          </div>
          <div class="container">
              @include('inc.website_elements.pricing')
          </div>
      </div>
      <!-- End Price Table area -->
      <!-- Gallery Area Start Here -->
      <div class="gallery-area">
          <div class="container">
              @include('inc.website_elements.gallery')
          </div>
      </div>
      <!-- Gallery Area End Here -->
      <!-- Start Fitness class summer area -->
      
      <!-- End online store area -->
      <!-- Counter Area Start Here -->
     
      <!-- Counter Area End Here -->
      <!-- Start latest news area -->
      <div class="latest-news-area nav-on-hover">
          <div class="container">
              <div class="section-title col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                  <h2>Actualité</h2>
              </div>

          </div>
          @include('inc.website_elements.posts')
      </div>
      <!-- End latest news area -->
      <!-- Start logo showcase area -->
   



@stop