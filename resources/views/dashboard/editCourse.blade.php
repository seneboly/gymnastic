@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', "Fitness Zone | $course->course_name")

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			@include('message.message')
			<div class="widget-header">
				<h4 class="text-center">Modifier cours : # {{$course->course_name}}</h4>
			</div>
			<div class="widget-content">
				<form method="POST" action="{{route('updateCourse', $course->id)}}" enctype="multipart/form-data">
                    @csrf
					@method('PUT')
					<div class="form-group">
						<label class="control-label">Cours</label>
						 <select name="course_name" class="form-control">
						 	@foreach($categories as $cat)
							 	@if($cat->name_of_cat === $course->course_name)
							 		<option value="{{$course->course_name}}" selected="selected">{{$course->course_name}}</option>
							 	@else
							 		<option value="{{$cat->name_of_cat}}">{{$cat->name_of_cat}}</option>
							 	@endif
						 	
						 	@endforeach
						 </select>
					</div>

					<div class="form-group">
						<label class="control-label">Moniteur</label>
						 <select name="monitor_id" class="form-control">
						 	@foreach($monitors as $monitor)
							 	@if($course->monitor_id == $monitor->id)
							 		<option value="{{$course->monitor->id}}">{{$course->monitor->monitor_name}}</option>
							 	@else
							 		<option value="{{$monitor->id}}">{{$monitor->monitor_name}}</option>
							 	@endif
						 	
						 	@endforeach
						 </select>
					</div>
					<br>
					<div class="form-group">
						<label class="control-label">Jour & heure</label>
						 <input type="text" onclick="this.setAttribute('type', 'datetime-local')" name="heure_cours" value="{{\Carbon\Carbon::parse($course->heure_cours)->format('d-m-Y H:i')}}" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Nombre de place</label>
						 <input type="number" name="place_max" value="{{old('$course->place_max') ?? $course->place_max}}" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Image de couverture</label>
						 <input type="file" name="cours_img" class="form-control">
						 @if($course->cours_img)
						 <div style="padding: 20px 00">
						 	<p><img src="{{asset('/storage/app/cours/'.$course->cours_img)}}" width="100" height="100" alt=""></p>
						 </div>
						 @endif
					</div>
					<div class="form-group">
						<label class="control-label">Ajouter au programme de la semaine</label>
						 <div class="form-radio">
						    <input type="radio" <?= $course->show_in_week_schedule == 1 ? "checked": '' ?> name="show_in_week_schedule" value="1" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Oui</label>
						    <br>
						    <input type="radio" name="show_in_week_schedule"  <?= $course->show_in_week_schedule == 0 ? "checked": '' ?> value="0" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Non</label>
						  </div>
						 
					</div>
					<div class="form-group" style="margin-bottom: 50px">
						<input type="submit" class="pull-right btn btn-primary col-md-3" value="Enregistrer les modifications">
							
						
					</div>

					

				</form>
			</div>

		</div>
	</div>

	<div class="container" style="margin:00 10%">
		<a href="{{route('addCourses')}}" class="btn btn-primary btn-lg"><i class="icon-arrow-left"></i> Retour à la liste des cours</a>
	</div>
</div>


@stop