@extends('layout.master')

@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Redaction des articles')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="widget box">
			<div class="widget-header">
				<h4><i class="icon-reorder"></i>Rédaction article</h4>
				@if(session('message'))
				<div class="message">

					
					@include('message.message')
					@include('inc.errors')
				</div>
				@endif
			</div>
			<div class="widget-content">
				<form class="form-horizontal row-border" method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
					@csrf

					
					<div class="form-group">
						<label class="col-md-2 control-label">Titre:</label>
						<div class="col-md-10"><input type="text" name="title" class="form-control"></div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Sous-titre:</label>
						<div class="col-md-10"><input class="form-control" type="text" name="subtitle"></div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Catégories:</label>
						<div class="col-md-10">
								<select name="category_id" class="form-control">
									@foreach($categories as $cat)
									<option value="{{$cat->id}}" >{{$cat->name_of_cat}}</option>
										
									@endforeach
								</select>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Joindre image:</label>
						<div class="col-md-10"><input class="form-control" type="file" name="images[]" multiple="multiple"></div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Contenu:</label>
						<div class="col-md-10"><textarea id="editor1" rows="5" name="content" class="form-control wysiwyg"></textarea></div>
					</div>

					<div class="form-group" style="margin-left: 30px">

						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="status" value="1">
							Publié
						</label>
						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="status" value="0">
							Ne pas publié
						</label>
						
						
					</div>

					<div class="form-group">
						
						<div class="col-md-10"><input class="btn btn-primary pull-right" type="submit" value="Enregistrer l'article"></div>
					</div>
				</form>
			</div>
		</div>
	</div> 
</div>
<!--Forms -->



<div class="row">
	<div class="col-md-12">
		<div class="widget box">
			<div class="widget-header">
				<h4><i class="icon-reorder"></i> Tous les articles</h4>
			</div>
			<div class="row widget-content">

				<form class="form-horizontal row-border" method="POST" action="{{route('update_articles')}}" style="margin:00 30px">
					@method('PUT')
					@csrf
					@foreach($articles as $article)
					<div class="form-group">
						<label class="col-md-2 control-label">{{$article->name_of_image}}</label>
						<div class="col-md-10">
							<label class="radio">
								<input type="checkbox" class="uniform" name="articles[]" multiple="multiple" value="{{$article->id}}">
								
								<p>
									
									@foreach($article->images->take(1) as $img)
                                      @if($img)
                                      
                                         <img class="img-responsive"  width="100" height="100" src="{{asset('/storage/app/articles/'.$img->name_of_image)}}" alt="{{$img->name_of_image}}" style="float: left; padding:5px 10px; ">

                                      @endif
                                	@endforeach
                                	<h4 class="text-danger pt-2 pb-2">{{$article->title}}</h4>
                                	<a href="#" class="btn btn-info btn-xs pull-right">{{$article->category->name_of_cat}}
                                	</a>
                                	<h6 class="text-primary pt-2 pb-2">{{$article->subtitle ?? ''}}</h6>
                                	
									{!! html_entity_decode(Str::words($article->content, 40) ) !!}
								</p>
								
									<a href="{{route('articles.edit', $article)}}" class="btn btn-xs btn-primary pull-right">
										<i class="icon-edit"> Modifier</i>
									</a>
									<a href="#" class="btn btn-xs {{$article->status ? 'btn-success' : 'btn-primary'}} pull-right">
										{{$article->status ? 'Publiée' : 'Non publiée'}}
									</a>
								
							</label>
							
						</div>
					</div>
					@endforeach
					
					<div class="form-group" style="margin:00 30px">

						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="status" value="1">
							Publié
						</label>
						<label class="radio">
							
							<input type="radio" class="uniform pb-2" name="status" value="0">
							Ne pas publié
						</label>
						
						@if($articles->count() > 0)
						<label class="radio">
							Suppression en masse
							<input type="radio" class="uniform pb-2 btn btn-danger" name="delete">
							
						</label>
						@endif
						<div class="col-md-10">
							
								<input type="submit" class="btn btn-primary col-md-2 pull-right" value="Valider"> 
							
						
						</div>
					</div>
</div>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 <script>
   CKEDITOR.replace( 'editor1' );
</script>
@stop