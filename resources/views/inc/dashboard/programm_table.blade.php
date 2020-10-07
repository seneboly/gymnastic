<table class="table">

  @if($courses->isNotEmpty())
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cours</th>
      <th scope="col">Moniteur</th>
      <th scope="col">Jour/Horaire</th>
    </tr>
  </thead>
  @endif
  <tbody>
    @forelse($courses as $cours)
    <tr>
      <th scope="row">{{++$loop->index}}</th>
      <td>{{$cours->course_name}}</td>
      <td>{{$cours->monitor->monitor_name}}</td>
      <td>@datetime($cours->heure_cours)</td>
     
    </tr>
    @empty
    <p class="text-center" style="padding-top: 20px">Il y'a pas de cours prévu!</p>
    @endforelse
    
  </tbody>


</table>