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
				<h4><i class="icon-reorder"></i>Modifier article : {{$article->title}}</h4>
				@if(session('message'))
				<div class="message">

					
					@include('message.message')
					@include('inc.errors')
				</div>
				@endif
			</div>
			<div class="widget-content">
				<form class="form-horizontal row-border" method="POST" action="{{route('articles.update', $article)}}" enctype="multipart/form-data">
					@csrf

					@method('PUT')
					<div class="form-group">
						<label class="col-md-2 control-label">Titre:</label>
						<div class="col-md-10">
							<input type="text" value="{{$article->title ?? ''}}" name="title" class="form-control"></div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Sous-titre:</label>
						<div class="col-md-10">
							<input class="form-control" type="text" name="subtitle" value="{{$article->subtitle ?? ''}}"></div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Catégories:</label>
						<div class="col-md-10">
								<select name="category_id" class="form-control">
									@foreach($categories as $cat)
										@if($cat->id == $article->category->id)
											<option value="{{$article->category->id}}" selected="selected">{{$article->category->name_of_cat}}</option>
										@else
											<option value="{{$cat->id}}" >{{$cat->name_of_cat}}</option>
										@endif
									
										
									@endforeach
								</select>
							</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Joindre image:</label>
						<div class="col-md-10"><input class="form-control" type="file" name="images[]" multiple="multiple"></div>
						@if($article->images)
						<div style="padding: 20px 00">

							@foreach($article->images as $img)
                              @if($img)
                              
                                 <img class="img-responsive"  width="125" height="100" src="{{asset('/storage/app/articles/'.$img->name_of_image)}}" alt="{{$img->name_of_image}}" style="display:inline-block; padding:15px 15px; ">

                              @endif
                        	@endforeach
							
						</div>
						@endif
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Contenu:</label>
						<div class="col-md-10"><textarea id="editor1" rows="5" name="content" class="form-control wysiwyg">
							{!! html_entity_decode($article->content ) ?? '' !!}
						</textarea></div>
					</div>

					

					<div class="form-group">
						
						<div class="col-md-10"><input class="btn btn-primary pull-right" type="submit" value="Enregistrer"></div>
					</div>
				</form>
			</div>
		</div>
	</div> 
</div>
<!--Forms -->





<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 <script>
   CKEDITOR.replace( 'editor1' );
</script>
@stop