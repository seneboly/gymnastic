
<!DOCTYPE html>
<html lang="fr">
<head>
	@include('inc.dashboard.head')
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			@include('inc.dashboard.top_navbar')
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->

		
	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">

				<!-- Search Input -->
				@include('inc.dashboard.sidebar')

			</div>
			<div id="divider" >
				<div class="container" style="margin:5% 00 0 20%">@yield('content')</div>
				
			</div>
		</div>
		<!-- /Sidebar -->

		

	
	

</body>
</html>