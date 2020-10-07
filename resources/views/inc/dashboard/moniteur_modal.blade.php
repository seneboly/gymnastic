<div class="modal fade" id="moniteur{{$monitor->id ?? ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Modifier les infos du moniteur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="widget box">
              
              <div class="widget-header">
                <h4 class="text-center">{{$monitor->monitor_name}}</h4>
              </div>
              <div class="widget-content">
                <form method="POST" action="{{route('moniteurs.update', $monitor->id)}}" enctype="multipart/form-data">
                            @csrf
                      @method('PUT')
                  <div class="form-group">
                    <label class="control-label">Nom Complet *</label>
                     <input type="text" name="monitor_name" value="{{$monitor->monitor_name ?? ''}}" required="required" data-error="Champs obligatoire" class="form-control">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Téléphone *</label>
                     <input type="phone" data-error="Champs obligatoire" required="required" name="monitor_phone" value="{{$monitor->monitor_phone ?? ''}}" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                     <input type="email" value="{{$monitor->monitor_email ?? ''}}"  name="monitor_email" class="form-control">
                  </div>
                  <br>
                  <div class="form-group">
                    <label class="control-label">Adresse</label>
                     <input type="text" value="{{$monitor->monitor_adresse ?? ''}}" name="monitor_adresse" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Joindre photo</label>
                     <input type="file" name="monitor_img"  class="form-control">
                     @if($monitor->monitor_img)
                        <br>
                        <p>
                          <img  src="{{asset('storage/app/moniteurs/'.$monitor->monitor_img)}}" width="100" height="100" alt="{{$monitor->monitor_img}}">
                        </p>
                        <br>
                      @endif
                  </div>
                  
                  <div class="form-group rs-link">
                    <label class="control-label">Linkedin link</label>
                     <input type="text" value="{{old('linkedin') ?? $monitor->linkedin}}" name="linkedin"  class="form-control">
                    
                  </div>
                  <div class="form-group rs-link">
                    <label class="control-label">Twitter link</label>
                     <input type="text" value="{{old('twitter') ?? $monitor->twitter}}" name="twitter"  class="form-control">
                    
                  </div>
                  <div class="form-group rs-link">
                    <label class="control-label">Facebook</label>
                     <input type="text" value="{{old('facebook') ?? $monitor->facebook}}" name="facebook"  class="form-control">
                    
                  </div>
                  <div class="form-group rs-link">
                    <label class="control-label">Instagram</label>
                     <input type="text" value="{{old('instagram') ?? $monitor->instagram}}" name="instagram"  class="form-control">
                    
                  </div>
                  <div class="form-group" style="margin-bottom:40px">
                    <input type="submit" class="pull-right btn btn-primary" value="Enregistrer">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $( document ).ready(function() {
      
     $('#monitor > div.form-group.rs-link').hide();

     $('input.rs_yes').click(function(){

        $('#monitor > div.form-group.rs-link').show();
     })

     $('input.rs_no').click(function(){

        $('#monitor > div.form-group.rs-link').hide();
        

     })

  });
</script>