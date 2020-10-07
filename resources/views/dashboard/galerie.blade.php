@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title')
Fitness Zone | Galerie
@endsection
@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			@include('message.message')
			<div class="widget-header">
				<h4 class="text-center">Galerie</h4>
			</div>
			<div class="widget-content">
				<form method="POST" action="{{route('galerie.store')}}" enctype="multipart/form-data" >
                    @csrf
					
					<div class="form-group">
						<label class="col-md-2 control-label">Etat: </label>
						<div class="col-md-10">
							<label class="checkbox">
								<input type="checkbox" name="published" class="uniform" value="1"> Publie
							</label>
							<label class="checkbox">
								<input type="checkbox" name="published" class="uniform" value="0" > Ne pas publié
							</label>
						</div>
					</div>
					

					<div class="form-group">
						<label class="col-md-2 control-label">Joindre des images:</label>
						<div class="col-md-10">
							<input type="file" name="name_of_image[]" data-style="fileinput" multiple="multiple">
						</div>
					</div>
					<br>
					
					<div class="form-group" style="margin:70px 00; padding-top:25px">
						<input type="submit" class="btn btn-primary col-md-2 pull-right" value="Enregistrer">
							
						
					</div>

					

				</form>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			<div class="widget-header">
				<h4><i class="icon-reorder"></i> Toutes les images</h4>
			</div>
			<div class="row widget-content">
				<form class="form-horizontal row-border" method="POST" action="{{route('update_images')}}">
					@method('PUT')
					@csrf
					@foreach($images as $img)
					<div class="form-group">
						<label class="col-md-2 control-label">{{$img->name_of_image}}</label>
						<div class="col-md-10">
							<label class="radio">
								<input type="checkbox" class="uniform" name="desc[]" multiple="multiple" value="{{$img->id}}">
								<img  src="{{asset('storage/app/images/'.$img->name_of_image)}}" width="100" height="100" alt="{{$img->name_of_image}}">
								
									<a href="#" class="btn btn-xs {{$img->published ? 'btn-success' : 'btn-primary'}} pull-right">
										{{$img->published ? 'Publiée' : 'Non publiée'}}
									</a>
								
							</label>
							
						</div>
					</div>
					@endforeach
					
					<div class="form-group">

						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="published" value="1">
							Publié
						</label>
						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="published" value="0">
							Ne pas publié
						</label>
						
						<div class="col-md-10">
							
								<input type="submit" class="btn btn-primary col-md-2 pull-right" value="Valider"> 
							
						
						</div>
					</div>
</div>
@stop