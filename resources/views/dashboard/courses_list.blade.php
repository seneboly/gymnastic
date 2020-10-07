<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cours</th>
      <th scope="col">Moniteur</th>
      <th scope="col">Jour/Horaire</th>
      <th scope="col">Nombre de place</th>
      <th scope="col">Opérations</th>

    </tr>
  </thead>
  <tbody>
    @foreach($courses as $cours)
    <tr>
      <th scope="row">{{++$loop->index}}</th>
      <td>
        {{$cours->course_name}} 
        @if($cours->show_in_week_schedule)
          <i class="icon-flag" style="color:#0f0"></i>
        @endif
      </td>
      <td>{{$cours->monitor->monitor_name}}</td>
      <td>@datetime($cours->heure_cours)</td>
      <td>{{$cours->place_max ?? 'Non renseigné'}}</td>
      <td>
         <a href="{{route('editCourse', $cours->id)}}" class="btn btn-primary btn-xs"><i class="icon-edit"></i></a>
         <a data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer ?" href="{{route('deleteCourse', $cours->id)}}" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>