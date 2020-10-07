@extends('layout.master')
@inject('c', 'App\services\Count')
@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Fitness Zone | Tarification')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			@include('message.message')
			<div class="widget-header">
				<h4 class="text-center">Ajouter un tarif </h4>
				
			</div>
			<div class="widget-content">
				<form method="POST" action="{{route('tarifs.store')}}">
                    @csrf
					
					<div class="form-group">
						<label class="control-label">Nom cours</label>
						 <select name="course_id" class="form-control">
						 	@foreach($courses as $cours)
						 	<option value="{{$cours->id}}">{{$cours->course_name}} - [ @datetime($cours->heure_cours) ]</option>
						 	@endforeach
						 </select>
					</div>

					
					<br>
					<div class="form-group">
						<label class="control-label">Type Package</label>
						 <select name="categorie_inscrit" class="form-control">
						 	@foreach($c->type_inscrits() as $type_inscrit)
						 	 <option value="{{$type_inscrit}}">{{$type_inscrit}}</option>
						 	@endforeach
						 </select>
					</div>
					<div class="form-group">
						<label class="control-label">Prix</label>
						 <input type="number" name="frais" class="form-control">
					</div>
					
					
					<div class="form-group" style="padding-bottom:30px">
						<input type="submit" class="pull-right btn btn-primary col-md-2" value="Enregistrer">
							
						
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<div class="row pt-5 pb-5" style="margin:50px 00 100px 00">
	@if($tarifs->count() > 0)

		@include('dashboard.tarifs_list')
	@endif

	
</div>

@stop