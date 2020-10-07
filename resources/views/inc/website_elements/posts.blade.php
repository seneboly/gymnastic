  <!-- Start latest news area -->
        <div class="latest-news-area bg-secondary" style="margin-top:-50px">
            <div class="container">
            @if($articles->count())
                <div class="row">
                    @foreach($articles as $article)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 child-trigar">
                        <div class="single-latest-news2">
                            <div class="single-news">
                                <div class="single-image hvr-shutter-out-horizontal">
                                    @if($article->images)
                                        @foreach($article->images->take(1) as $img)
                                        <img style="width: 370px !important; min-height:300px !important; max-height: 300px" src="{{asset('/storage/app/articles/'.$img->name_of_image)}}" alt="{{$img->nom_image}}" alt="news1" class="img-responsive">
                                        @endforeach
                                    @endif
                                        <a href="{{route('articles.show', $article)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                   
                                </div>
                                <div class="date">{{$article->created_at->day}}
                                    <br>@mois($article->created_at)
                                    <br>{{$article->created_at->year}}</div>
                            </div>
                            <div class="news-content" style="min-height:550px !important; max-height: 550px">
                                <h3><a href="{{route('articles.show', $article)}}">{{$article->title}}</a></h3>
                                <p>{!! html_entity_decode(Str::words($article->content, 40) ) !!}</p>

                                <p><a href="{{route('articles.show', $article)}}" class="btn btn-outline-danger">Lire suite...</a></p>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            @endif
            </div>
        </div>
        <!-- End latest news area -->