<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="logo-area">
                    <a href="{{route('home')}}"><img src="{{asset('template/images/logo.png')}}"  class="img-responsive" height="auto" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-10">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="{{Route::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">Accueil</a></li>
                            <li class="{{Route::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">A propos</a></li>
                            <li class="{{Route::is('programm') ? 'active' : '' }}"><a href="{{route('programm')}}">Programme</a></li>

                            <li class="{{Route::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm">
                <div class="header-top-right">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End header Top Area -->
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                           <li class="{{Route::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">Accueil</a></li>
                           <li class="{{Route::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">A propos</a></li>
                           <li class="{{Route::is('programm') ? 'active' : '' }}"><a href="{{route('programm')}}">Programme</a></li>

                           <li class="{{Route::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                          </ul>
                            
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>