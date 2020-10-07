<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cours/Heure</th>
      <th scope="col">Frais</th>
      <th scope="col">Type</th>
      <th scope="col">Opérations</th>

    </tr>
  </thead>
  <tbody>
    @forelse($tarifs as $tarif)
    <tr>
      <th scope="row">{{++$loop->index}}</th>
      
      <td>
        @foreach($tarif->courses as $cours)
          {{$cours->course_name}} / [ @datetime($cours->heure_cours)]
        @endforeach
      </td>
      <td>
          {{number_format($tarif->frais, 0, ' ', ' ')}} FCFA
        </td>
      <td>{{$tarif->categorie_inscrit}}</td>
      <td>
         <a data-toggle="modal" href="#tarifs{{$tarif->id}}" class="btn btn-primary btn-xs"><i class="icon-edit"></i></a>
         <a data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer ?" href="{{route('tarifs.destroy', $tarif->id)}}" class="btn btn-danger btn-xs"><i class="icon-trash"></i>
         </a>
      </td>
    </tr>
      @include('inc.dashboard.tarif_modal_edit')
      @empty
        <p class="text-center">Il y'a pas de tarif</p>
    @endforelse
  </tbody>
</table>