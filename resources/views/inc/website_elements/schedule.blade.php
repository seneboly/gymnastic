@inject('p', 'App\Services\Programm')
@inject('c', 'App\Services\Cours')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        
        <div class="class-schedule-wrap">
            <!-- Tabs -->
            <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#monday" data-toggle="tab">Lundi</a></li>
                <li><a href="#tuesday" data-toggle="tab">Mardi</a></li>
                <li><a href="#wednesday" data-toggle="tab">Mercredi</a></li>
                <li><a href="#thursday" data-toggle="tab">Jeudi</a></li>
                <li><a href="#friday" data-toggle="tab">Vendredi</a></li>
                <li><a href="#saturday" data-toggle="tab">Samedi</a></li>
                <li><a href="#sunday" data-toggle="tab">Dimanche</a></li>
            </ul>
            <div id="myTabContent" class="tab-content class-schedule-tab">
                <div class="tab-pane fade in active" id="monday">
                   @include('website.programm_li', ['j'=>'lundi'])
                </div>
                <div class="tab-pane fade" id="tuesday">
                    @include('website.programm_li', ['j'=>'mardi'])
                </div>
                <div class="tab-pane fade" id="wednesday">
                    @include('website.programm_li', ['j'=>'mercredi'])
                </div>
                <div class="tab-pane fade" id="thursday">
                   @include('website.programm_li', ['j'=>'jeudi'])
                </div>
                <div class="tab-pane fade" id="friday">
                   @include('website.programm_li', ['j'=>'vendredi'])
                </div>
                <div class="tab-pane fade" id="saturday">
                   @include('website.programm_li', ['j'=>'samedi'])
                </div>
                <div class="tab-pane fade" id="sunday">
                   @include('website.programm_li', ['j'=>'dimanche'])
                </div>
            </div>
        </div>
    </div>
</div>