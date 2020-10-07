@if($courses->count() > 0)
<div class="gym-carousel " data-loop="true" data-items="{{$courses->count()}}" data-margin="15" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">

    @foreach($courses->where('show_in_week_schedule', true)->all() as $cours)
        <div class="single-product-classes">
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
                <h3><a href="{{route('programm')}}">{{$cours->course_name}}</a></h3>
                <span class="author"><i class="fa fa-user"></i>{{$cours->monitor->monitor_name}}</span>
            </div>
        </div>
    @endforeach

</div>

@endif