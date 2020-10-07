<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Complet</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
      <th scope="col">Adresse</th>
      <th scope="col">Opérations</th>

    </tr>
  </thead>
  <tbody>
    @foreach($monitors as $monitor)
    <tr>
      <th scope="row">{{++$loop->index}}</th>
      <td>{{$monitor->monitor_name}}</td>
      <td>{{$monitor->monitor_phone}}</td>
      <td>{{$monitor->monitor_email}}</td>
      <td>{{$monitor->monitor_adresse}}</td>
      <td>
         <a data-toggle="modal" href="#moniteur{{$monitor->id}}" class="btn btn-primary btn-xs"><i class="icon-edit"></i></a>
         <a data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer ?" href="{{route('moniteurs.destroy', $monitor)}}" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
      </td>
    </tr>
    @include('inc.dashboard.moniteur_modal')
    @endforeach
  </tbody>
</table>

