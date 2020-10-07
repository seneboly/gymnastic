<div class="modal fade" id="entete_cours" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <h4 class="text-center">Entete de cour</h4>
              </div>
              <div class="widget-content">
                <form method="POST" action="{{route('store_entete')}}" >
                            @csrf
                      
                  <div class="form-group">
                    <label class="control-label">Intitulé du cours *</label>
                     <input type="text" name="name_of_cat" value="" required="required" data-error="Champs obligatoire" class="form-control">
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