<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="section-title">
            <h2  class="text-white">Galerie</h2>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="isotop-classes-tab isotop-btn">
            <a href="#" data-filter="*" class="current">Toutes les images</a>
            <a href="#" data-filter=".Yoga" >Fitness</a>
            <a href="#" data-filter=".Running" >MUSCULATION </a>
            <a href="#" data-filter=".Gym" >CALISTHENICS </a>
        </div>
    </div>
</div>
<div class="row portfolioContainer gallery-wrapper zoom-gallery">
@if($images)
    @foreach($images as $img)
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 Yoga Gym">
        <div class="gallery-box">
            <img src="{{asset('storage/app/images/'.$img->name_of_image)}}" style="min-height:200px;max-height:200px; width:100%" class="img-responsive" alt="gallery">
            <div class="gallery-content">
                <a href="img/gallery/1.jpg" class="elv-zoom" title="Fitness"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    @endforeach
@endif
</div>