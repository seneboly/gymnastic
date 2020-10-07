<div class="modal fade" id="tarifs{{$tarif->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Modifier Tarifs # {{$tarif->categorie_inscrit}}
        </h5>
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
                <form method="POST" action="{{route('tarifs.update', $tarif->id)}}" >
                            @csrf
                      @method('PUT')
                  <div class="form-group">
                              <label class="control-label">Nom cours</label>
                               <select name="course_id" class="form-control">

                                    @foreach($courses as $cours)
                                      
                                          @if($cours->id == $tarif->id)

                                            <option value="{{$tarif->id}}" selected="selected">{{$tarif->course_name}}</option>
                                          @else
                                        <option value="{{$cours->id}}">{{$cours->course_name}}</option>
                                      @endif
                                    @endforeach
                                
                               </select>
                            </div>

                            
                            <br>
                            <div class="form-group">
                              <label class="control-label">Type Package</label>
                               <select name="categorie_inscrit" class="form-control">
                                @foreach($c->type_inscrits() as $type_inscrit)
                                    @if($tarif->categorie_inscrit === $type_inscrit)
                                      <option value="{{$tarif->categorie_inscrit}}" selected="selected">{{$tarif->categorie_inscrit}}</option>
                                    @else
                                      <option value="{{$type_inscrit}}">{{$type_inscrit}}</option>
                                    @endif
                                     
                                 @endforeach
                                
                               </select>
                            </div>
                            <div class="form-group">
                              <label class="control-label">Prix</label>
                               <input type="number" value="{{$tarif->frais}}" name="frais" class="form-control">
                            </div>
                            
                            
                            <div class="form-group" style="padding-bottom:30px">
                              <input type="submit" class="pull-right btn btn-primary " value="Enregistrer">
                                
                            </div>

                  </div>
                </form>
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