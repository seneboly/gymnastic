@inject('c', 'App\Services\Count')
    
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
            <div class="price-table-box">
                <span>{{$c->type_inscrits[0]}}</span>
               
                <ul>
                    @foreach($tarifs->where('categorie_inscrit', $c->type_inscrits[0]) as $tarif)
                        <li>
                            @foreach($tarif->courses as $cours)
                                {{$cours->course_name}} : {{number_format($tarif->frais, 0, ' ', ' ')}}
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
            <div class="price-table-box">
                <span>{{$c->type_inscrits[1]}}</span>
                
                <ul>
                    @foreach($tarifs->where('categorie_inscrit', $c->type_inscrits[1]) as $tarif)
                        <li>
                            @foreach($tarif->courses as $cours)
                                {{$cours->course_name}} :  {{number_format($tarif->frais, 0, ' ', ' ')}}
                            @endforeach
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
            <div class="price-table-box">
                <span>{{$c->type_inscrits[2]}}</span>
                <ul>
                    @foreach($tarifs->where('categorie_inscrit', $c->type_inscrits[2]) as $tarif)
                        <li>
                            @foreach($tarif->courses as $cours)
                                {{$cours->course_name}} :  {{number_format($tarif->frais, 0, ' ', ' ')}}
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
