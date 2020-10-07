<div class="right-sidebar">
  <div class="single-sidebar">
        <h3>Catégories</h3>
        <div class="categories">
            <ul>
            	@if($categories->count())
                	@foreach($categories as $cat)
                	
                	 <li><a href="{{route('article_by_cat', $cat->id)}}">{{$cat->name_of_cat}}</a></li>
                	@endforeach
            	@endif
                
            </ul>
        </div>
    </div> 
</div>