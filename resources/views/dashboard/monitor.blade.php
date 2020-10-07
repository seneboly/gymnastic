@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Fitness Zone | Moniteurs')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="widget box">
			@include('message.message')
			<div class="widget-header">
				<h4 class="text-center">Ajouter un Moniteur</h4>
			</div>
			<div class="widget-content">
				<form method="POST" action="{{route('moniteurs.store')}}" enctype="multipart/form-data" id="monitor">
                    @csrf
					
					<div class="form-group">
						<label class="control-label">Nom Complet *</label>
						 <input type="text" name="monitor_name" required="required" data-error="Champs obligatoire" class="form-control">
					</div>

					<div class="form-group">
						<label class="control-label">Téléphone *</label>
						 <input type="phone" data-error="Champs obligatoire" required="required" name="monitor_phone" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Email</label>
						 <input type="email"  name="monitor_email" class="form-control">
					</div>
					<br>
					<div class="form-group">
						<label class="control-label">Adresse</label>
						 <input type="text" name="monitor_adresse"  class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label">Joindre photo</label>
						 <input type="file" name="monitor_img"  class="form-control">
						
					</div>
					<div class="form-group">
						<label class="control-label">Ajouter liens Réseaux Sociaux ?</label>
						 <div class="form-check">
						    <input type="checkbox" class="rs_yes" >
						    <label class="form-check-label" for="exampleCheck1">Oui</label>
						    <br>
						    <input type="checkbox" class="rs_no checkbox-no" >

						    <label class="form-check-label" for="exampleCheck2">Non</label>
						  </div>
						  
					</div>
					<div class="form-group rs-link">
						<label class="control-label">Linkedin link</label>
						 <input type="text" name="linkedin"  class="form-control">
						
					</div>
					<div class="form-group rs-link">
						<label class="control-label">Twitter link</label>
						 <input type="text" name="twitter"  class="form-control">
						
					</div>
					<div class="form-group rs-link">
						<label class="control-label">Facebook</label>
						 <input type="text" name="facebook"  class="form-control">
						
					</div>
					<div class="form-group rs-link">
						<label class="control-label">Instagram</label>
						 <input type="text" name="instagram"  class="form-control">
						
					</div>
					
					<div class="form-group" style="margin-bottom: 50px">
						<input type="submit" class="pull-right btn btn-primary col-md-2" value="Enregistrer">
							
						
					</div>

					

				</form>
			</div>
		</div>
	</div>
</div>

<div class="row container pt-5 pb-5">
	@if($monitors->count() > 0)

		@include('dashboard.monitors_list')
	@endif
</div>


<script src="{{asset('template/js/vendor/jquery-1.11.3.min.js')}}"></script>

<script type="text/javascript">


$( document ).ready(function() {
	
	   $('#monitor > div.form-group.rs-link').hide();

	   $('input.rs_yes').click(function(){

	   		$('#monitor > div.form-group.rs-link').show();
	   });

	   $('input.rs_no').click(function(){

	   		$('#monitor > div.form-group.rs-link').hide();
	   		

	   });

});
</script>
@stop