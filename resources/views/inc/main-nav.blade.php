
    <ul>
        <li class="{{Route::is('home') ? 'active' : '' }}"><a href="{{route('home')}}" class="meanmenu-reveal">Accueil</a></li>   
        <li class="{{Route::is('about') ? 'active' : '' }}"><a href="{{route('about')}}" class="meanmenu-reveal">A propos</a></li>
        <li class="{{Route::is('programm') ? 'active' : '' }}"><a href="{{route('programm')}}">Programme</a></li>

        <li class="{{Route::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}" class="meanmenu-reveal">Contact</a></li>
    </ul>
