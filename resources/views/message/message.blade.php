@if(session('message'))
<div class="col-lg-4  col-md-4 elementToFadeInAndOut"> 
    
    <div class="adminpro-message-list alert {{session('class') ?? ''}}">
       <p style="color:#000">{{session('message')}}</p>
    </div>
    
</div>    
@endif 