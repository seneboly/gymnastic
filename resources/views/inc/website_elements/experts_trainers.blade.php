<!-- Start Our trainer area -->
<div class="our-trainer-area padding-top">
<div class="container">
    <div class="row">
    @foreach($monitors as $monitor)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
            <div class="our-trainer-item">

                <div class="trainer-image">
                 @if($monitor->monitor_img)
                    <img src="{{asset('storage/app/moniteurs/'.$monitor->monitor_img)}}" alt="" width="300" height="300">
                 @endif
                    <div class="social-overly">
                        <ul>
                            <li><a href="{{$monitor->facebook ?? '#'}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$monitor->twitter ?? '#'}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{$monitor->linkedin ?? '#'}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           
                        </ul>
                    </div>
                    <div class="trainer-overly">
                        <h3><a href="#">{{$monitor->monitor_name}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
</div>
<!-- End Our trainer area -->