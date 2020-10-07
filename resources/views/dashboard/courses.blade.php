@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Fitness Zone | Cours')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
		@if(session('message'))
			@include('message.message')
		@endif
			<div class="widget-header">
				<h4 class="text-center">Ajouter un cours</h4>
				
				<a href="{{route('entetes')}}" class="btn btn-link pull-right"><i class="icon-edit"></i> Modifier les entêtes de cours</a>
				<a data-toggle="modal" href="#entete_cours" class="btn btn-link pull-right"> <i class="icon-plus"></i> Ajouter entête cours</a>
			</div>
			<div class="widget-content">
				<form method="POST" action="{{route('storeCourse')}}" enctype="multipart/form-data">
                    @csrf
					
					<div class="form-group">
						<label class="control-label">Nom cours</label>
						 <select name="course_name" class="form-control">
						 	@foreach($categories as $cat)
						 	<option value="{{$cat->name_of_cat}}">{{$cat->name_of_cat}}</option>
						 	@endforeach
						 </select>
					</div>

					<div class="form-group">
						<label class="control-label">Moniteur</label>
						 <select name="monitor_id" class="form-control">
						 	@foreach($monitors as $monitor)
						 	<option value="{{$monitor->id}}">{{$monitor->monitor_name}}</option>
						 	@endforeach
						 </select>
					</div>
					<br>
					<div class="form-group">
						<label class="control-label">Jour & heure</label>
						 <input type="datetime-local" name="heure_cours" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Nombre de place</label>
						 <input type="number" name="place_max" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Image de couverture</label>
						 <input type="file" name="cours_img" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Ajouter au programme de la semaine</label>
						 <div class="form-check">
						    <input type="radio" name="show_in_week_schedule" value="1" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Oui</label>
						    <br>
						    <input type="radio" name="show_in_week_schedule" value="0" class="form-check-input" id="exampleCheck1">

						    <label class="form-check-label" for="exampleCheck1">Non</label>
						  </div>
						  
					</div>
					<div class="form-group" style="margin-bottom:50px">
						<input type="submit" class="pull-right btn btn-primary col-md-2" value="Enregistrer">
							
						
					</div>

					

				</form>
			</div>
		</div>
	</div>
</div>

@include('inc.dashboard.entete_course_modal', ['route'=>"{{route('store-entete')}}"])

<div class="row pt-5 pb-5" style="margin:50px 00 150px 00">
	@if($courses->count() > 0)

		@include('dashboard.courses_list')
	@endif

	{{$courses->links()}}
</div>



@stop