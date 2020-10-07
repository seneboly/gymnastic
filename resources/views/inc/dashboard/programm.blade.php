<div class="row">
	<div class="col-md-12">
		<div class="widget box">
			<div class="widget-header">
				<h4 >Programme</h4>
				@if(session('message'))
				<div class="message">

					
					@include('message.message')
					@include('inc.errors')
				</div>
				@endif
			</div>
			<div class="widget-content">
				<ul class="nav nav-tabs">
				    <li><a data-toggle="tab" href="#menu1" class="active">Lundi</a></li>
				    <li><a data-toggle="tab" href="#menu2">Mardi</a></li>
				    <li><a data-toggle="tab" href="#menu3">Mercredi</a></li>
				    <li><a data-toggle="tab" href="#menu4">Jeudi</a></li>
				    <li><a data-toggle="tab" href="#menu5">Vendredi</a></li>
				    <li><a data-toggle="tab" href="#menu6">Samedi</a></li>
				    <li><a data-toggle="tab" href="#menu7">Dimanche</a></li>
				  </ul>

				  <div class="tab-content">
				    
				    <div id="menu1" class="tab-pane fade fade in active">
				      @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'lundi')])
				    </div>
				    <div id="menu2" class="tab-pane fade">
				     @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'mardi')])
				    </div>
				    <div id="menu3" class="tab-pane fade">
				      @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'mercredi')])
				    </div>
				     <div id="menu4" class="tab-pane fade">
				      @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'jeudi')])
				    </div>
				    <div id="menu5" class="tab-pane fade">
				      @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses, 'vendredi')])
				    </div>
				     <div id="menu6" class="tab-pane fade">
				      @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'samedi')])
				    </div>
				    <div id="menu7" class="tab-pane fade">
				     @include('inc.dashboard.programm_table', ['courses'=>$p->cours($courses,'dimanche')])
				    </div>
				  </div>
			</div>
		</div>
	</div> 
</div>