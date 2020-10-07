        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="about-company">
                            <h3>A PROPOS</h3>
                            <p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. Suspen disse at eros tempus, congueconsequat.Fusce sit amet urna feugiat.Praesent vel rutrum purus. Nam vel dui eu risus.</p>
                            <div class="social-icons">
                                <ul class="social-link">
                                    <li class="first">
                                        <a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="second">
                                        <a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="third">
                                        <a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="flickr-photos">
                            <h3>Extraits de la galerie</h3>
                            <div class="flickr-list">
                                @if($images->count())
                                <ul>
                                 @foreach($images as $img)
                                    <li>
                                        <a class="fancybox" href="{{asset('storage/app/images/'.$img->name_of_image)}}" data-fancybox-group="flickr" title="{{$img->name_of_image ?? ''}}">
                                            <img style="padding:5px 3px" src="{{asset('storage/app/images/'.$img->name_of_image)}}" alt="{{$img->name_of_image ?? ''}}"></a>
                                    </li>
                                 @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="corporate-office">
                            <h3>Contact</h3>
                            <div class="corporate-address">
                                <ul>
                                    <li><i class="fa fa-send" aria-hidden="true"></i>Route de la Corniche Est, Dakar Sénégal</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>77 837 77 00 </li>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>contact@momoaudi.com</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End footer Area -->
        <!-- Start copyright area -->
        <div class="copy-right-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="copy-right">
                            <p>© Copyrights <a href="https://digisen.sn" target="_blank">Digisen</a> {{now()->year}}. All rights reserved. Designed by<a href="https://www.linkedin.com/in/boly-sene-369025164/" target="_blank"> BS</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End copyright area -->
</div>
<!-- End wrapper -->
<a href="#" class="scrollToTop"></a>
<!-- jquery
    ============================================ -->
<script src="{{asset('template/js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/bootstrap-tabcollapse.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('template/js/jquery.meanmenu.min.js')}}"></script>
<!-- Owl Cauosel JS 
    ============================================ -->
<script src="{{asset('template/vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<!-- Nivo slider js
    ============================================ -->
<script src="{{asset('template/css/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('template/css/custom-slider/home.js')}}" type="text/javascript"></script>
<!-- Zoom JS
    ============================================ -->
<script src="{{asset('template/js/jquery.zoom.js')}}"></script>
<!-- Isotope JS
    ============================================ -->
<script src="{{asset('template/js/isotope.pkgd.js')}}"></script>
<!-- Counter Up JS
    ============================================ -->
<script src="{{asset('template/js/waypoints.min.js')}}"></script>
<script src="{{asset('template/js/jquery.counterup.min.js')}}"></script>
<!-- Magic Popup js 
    ============================================-->
<script src="{{asset('template/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
<!-- Wow JS
    ============================================ -->
<script src="{{asset('template/js/wow.min.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('template/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('template/js/main.js')}}"></script>

<script type="text/javascript">
    
    $(document).ready(function(){

        var c = document.querySelector('div.mean-bar > a >img');
        c.setAttribute('src', "{{asset('template/images/logo.png')}}");
        
        c.style.marginLeft = "-40px";
        c.style.paddingTop = "5px";

        var b = document.querySelector('div.mean-bar > a ');
        b.setAttribute('href', "{{route('home')}}");
        

        
       

        

    });
    
</script>