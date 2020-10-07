

<!-- Logo -->
<a href="javascript:void(0);" title="">FITNESS ZONE</a><
<!-- /logo -->

<!-- Sidebar Toggler -->
<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
	<i class="icon-reorder"></i>
</a>

<!-- /Top Left Menu -->

<!-- Top Right Menu -->
<ul class="nav navbar-nav navbar-right">
	<!-- Notifications -->
	

	<!-- User Login Dropdown -->
	<li class="dropdown user">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
			<i class="icon-male"></i>
			<span class="username">{{Auth::user()->name}}</span>
			<i class="icon-caret-down small"></i>
		</a>
		<ul class="dropdown-menu">
{{-- 			<li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
 --}}			
			<li><a data-method="POST" data-confirm="Êtes-vous sûr de vouloir quitter cette page ?" href="{{route('logout')}}"><i class="icon-key"></i>Deconnexion</a></li>
		</ul>
	</li>
	<!-- /user login dropdown -->
</ul>