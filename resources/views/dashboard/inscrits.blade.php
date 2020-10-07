@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Fitness Zone | Inscrits aux cours')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			@include('message.message')
			<div class="widget-header">
				<h4 class="text-center">Liste des inscrits aux différents cours</h4>
			</div>
			<div class="widget-content">
				@if($inscrits->count() > 0)
					@include('dashboard.inscrits_list')
				@else
				<p class="text-center">Il y'a pas d'inscrit pour l'instant</p>
				@endif
			</div>
		</div>
	</div>
</div>




@stop