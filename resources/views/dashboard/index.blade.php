@extends('layout.master')

@inject('c', 'App\services\Count')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Tableau de bord')

@section('content')

<div class="row container row-bg">

	<div class="col-sm-6 col-md-3">
		<div class="statbox widget box box-shadow">
			<div class="widget-content">
				<div class="visual cyan">
					<div class="statbox-sparkline"></div>
				</div>
				<div class="title">Inscrit(e)s</div>
				<div class="value">{{$inscrits->count()}}</div>
				<a class="more" href="#">Voir Plus <i class="pull-right icon-angle-right"></i></a>
			</div>
		</div> <!-- /.smallstat -->
	</div> <!-- /.col-md-3 -->

	<div class="col-sm-6 col-md-3">
		<div class="statbox widget box box-shadow">
			<div class="widget-content">
				<div class="visual green">
					<div class="statbox-sparkline"></div>
				</div>
				<div class="title">Articles</div>
				<div class="value">{{$articles->count()}}</div>
				<a class="more" href="{{route('articles.create')}}">Voir Plus <i class="pull-right icon-angle-right"></i></a>
			</div>
		</div> <!-- /.smallstat -->
	</div> <!-- /.col-md-3 -->

	<div class="col-sm-6 col-md-3 hidden-xs">
		<div class="statbox widget box box-shadow">
			<div class="widget-content">
				<div class="visual yellow">
					
				</div>
				<div class="title">Cours</div>
				<div class="value">{{$courses->count()}}</div>
				<a class="more" href="{{route('addCourses')}}">Voir Plus <i class="pull-right icon-angle-right"></i></a>
			</div>
		</div> <!-- /.smallstat -->
	</div> <!-- /.col-md-3 -->

	<div class="col-sm-6 col-md-3 hidden-xs">
		<div class="statbox widget box box-shadow">
			<div class="widget-content">
				<div class="visual red">
					
				</div>
				<div class="title">Moniteurs</div>
				<div class="value">{{$monitors->count()}}</div>
				<a class="more" href="{{route('moniteurs.create')}}">Voirs Plus <i class="pull-right icon-angle-right"></i></a>
			</div>
		</div> <!-- /.smallstat -->
	</div> <!-- /.col-md-3 -->
</div>

<div class="row container pt-5 pb-5" style="padding:100px 00">
	
	<div class="col-md-10 col-md-offset-1">
		<canvas id="myChart" width="300" height="120"></canvas>
	</div>
</div>

@stop

<script src="{{asset('template/js/vendor/jquery-1.11.3.min.js')}}"></script>

<script src="{{asset('admin_temp/plugins/chartjs/Chart.js')}}"></script>
<script src="{{asset('admin_temp/plugins/chartjs/Chart.min.js')}}"></script>

<script>

	$( document ).ready(function() {
	    
	    var ctx = document.getElementById('myChart').getContext('2d');
	    var myChart = new Chart(ctx, {
	        type: 'bar',
	        data: {
	            labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aôut', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
	            datasets: [{
	                label: "Le nombre d'inscrits durant ce mois",
	                data: ["{{$students[0]}}", "{{$students[1]}}", "{{$students[2]}}", "{{$students[3]}}", "{{$students[4]}}", "{{$students[5]}}", "{{$students[6]}}", "{{$students[7]}}", "{{$students[8]}}", "{{$students[9]}}", "{{$students[10]}}", "{{$students[11]}}"],
	                backgroundColor: [
	                    '#677E52',
	                    '#046380',
	                    '#002F2F',
	                    '#B9121B',
	                    '#BD8D46',
	                    '#5EB6DD',
	                    '#556627',
	                    '#FFF168',
	                    '#8FCF3C',
	                    '#FF5B2B',
	                    '#F4FF3A',
	                    '#495CFF',
	                ],
	                
	                borderWidth: 1
	            }]
	        },
	        
	    });
	});


</script>