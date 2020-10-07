<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom et Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Adresse</th>
      <th scope="col">Cours</th>
      <th scope="col">Date & Heure de cours</th>

    </tr>
  </thead>
  <tbody>
    @forelse($inscrits as $inscrit)
    <tr>
      <th scope="row">{{++$loop->index}}</th>
      <td>{{$inscrit->name}}</td>
      <td>{{$inscrit->email}}</td>
      <td>{{$inscrit->phone}}</td>
      <td>{{$inscrit->adresse}}</td>
      <td>
        @foreach($inscrit->courses as $cours)
        {{$cours->course_name}} @if(!$loop->last) / @endif 
        @endforeach
      </td>
      <td>
        @foreach($inscrit->courses as $cours)
          @datetime($cours->heure_cours)
        @endforeach
      </td>
     
    </tr>
     @empty
    @endforelse
  </tbody>
</table>