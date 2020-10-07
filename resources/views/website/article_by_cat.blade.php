@extends('layout.app')

@section('title', "Fitness Zone | $categorie->name_of_cat ")

@section('content')

 <div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li><a href="#">Publications</a></li>
                    <li class="active">{{strtoupper($categorie->name_of_cat ?? '')}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="news-page-area padding-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
            	@foreach($categorie->posts as $article)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="single-news-page">
                        <div class="single-news">
                             
	                            @if($article->images)
	                                @foreach($article->images->take(1) as $img)
	                                <img style="width:auto; max-height:350px; min-height:350px" src="{{asset('/storage/app/articles/'.$img->name_of_image)}}" alt="{{$img->nom_image}}">
	                                @endforeach
	                            @endif
	                         
                        </div>
                        <div class="news-content" style="max-height: 500px; min-height: 500px;">
                            <h3><a href="{{(route('articles.show', $article))}}">{{$article->title}}</a>
                            </h3>
                            <p>{!! html_entity_decode(Str::words($article->content, 35) ) !!}</p>
                            <p>
                            	<a class="read-more" href="{{(route('articles.show', $article))}}">Lire suite</a>	
                            </p>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagination-area">
                     <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="right-sidebar">
                    @include('inc.article_sidebar')
                </div>
            </div>
        </div>
    </div>
</div>
          
@stop