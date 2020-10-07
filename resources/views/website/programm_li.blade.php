@forelse($p->cours($courses, $j) as $cours)
<ul class="odd">
    
    <li>{{$cours->course_name}}

    	@if($cours->place_max)
			 - 
		<span>[ {{$c->registered($courses, $cours->id)}} / {{$cours->place_max}} ]</span>
		@endif
    </li>
    <li>@datetime($cours->heure_cours)</li>
    <li>{{$cours->monitor->monitor_name}}</li>

    @if($c->canRegister($courses, $cours->id))
    	<li><a href="{{route('course-create', $cours->id)}}" >Voir</a></li>
    @endif
</ul>
@empty

<p style="text-align: center; color:#fff; font-size: bold">Il y'a pas de cours pour le moment !</p>

@endforelse