@if(count($errors))
<div class="alert alert-danger" align="center">
	 <button type="button" class="close" data-dismiss="alert">&times;</button>
<h5>Veuillez corriger les erreurs suivantes</h5> 
	@foreach($errors->all() as $error)

     <p align="center">{{$error}}</p>
	@endforeach
</div>
@endif