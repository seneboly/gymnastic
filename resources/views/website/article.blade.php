@extends('layout.app')

@section('title', "Fitness Zone | $article->title")

@section('content')

 <div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li><a href="{{route('home')}}">Publications</a></li>
                    <li class="active">{{strtoupper($article->category->name_of_cat ?? '')}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- End Inner Banner area -->
<!-- Start details classes area -->
<div class="news-detail-area padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="single-news-detail">
                    <div class="class-content">
                        <div class="detail-img">
                            @if($article->images)
                                @foreach($article->images->take(1) as $img)
                                <img style="width:auto; max-height: 450px" src="{{asset('/storage/app/articles/'.$img->name_of_image)}}" alt="{{$img->nom_image}}">
                                @endforeach
                            @endif
                        </div>
                        <div class="class-heading">
                            <h3>{{$article->title}}</h3>
                        @if($article->subtitle)
                            <div class="subtitle">
                                <blockquote class="PoliQuote pull-left">
                                    <p>{{$article->subtitle}}</p>
                                </blockquote>
                            </div>
                        @endif
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>@datetime($article->created_at)</li>
                                <li><i class="fa fa-user" aria-hidden="true"></i>Admin</li>
                            
                            </ul>
                        </div>
                        <div class="content">
                            <p>{!! html_entity_decode($article->content)  !!}</p>
                        </div>
                        <div class="news-tag">
                            <h3>Mots clés</h3>
                            @if($categories->count())
                            	@foreach($categories as $cat)
                            	<a href="#" class="read-more" style="font-size: 15px; font-weight: bold;">
                            		{{$cat->name_of_cat}} 

                            		@if(!$loop->last)
                            			|
                            		@endif
                            	</a> 
                            	@endforeach
                            @endif
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
                @include('inc.article_sidebar')
            </div>
        </div>
    </div>
</div>
@endsection