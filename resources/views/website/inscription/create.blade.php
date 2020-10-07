@extends('layout.app')

@section('title', 'Fitness Zone | Inscription')

@section('content')

<div class="inner-banner-area-about" style="padding-top:20%">
    <div class="container" style="margin-bottom:8%">
        <div class="row">
            
            <div class="breadcrum-area">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">ACCUEIL</a></li>
                    <li class="active">Inscription</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row container-fluid">
    <div class="about-fitness-left col-md-6 col-xs-10 ">
        <div class="about-left-img padding-space">
            <img src="{{asset('template/images/about-fitness-img.png')}}" alt="about-fitness-img">
            <div class="overly">
                <h3>Inscription<br>cours</h3>
            </div>
        </div>
    </div>
    <div class="pt-5 pb-5">@include('message.message')</div>

    <div style="padding:8% 00" class="col-md-4 col-md-offset-1 col-xs-10 col-xs-offset-1">
      
       <form method="POST" action="{{route('course-store', $cours->id)}}">
          
        @csrf
         <div class="form-group">
           <label for="exampleFormControlInput1">Nom complet *</label>
           <input type="text" name="name" class="form-control" required="required" id="exampleFormControlInput1" >
         </div>
          <div class="form-group">
           <label for="exampleFormControlSelect1">Telephone  *</label>
            <input name="phone" type="number" class="form-control" required="required" placeholder="Exemple: 77 721 64 33">
            
           </select>
         </div>
         <div class="form-group">
           <label for="exampleFormControlSelect1">Cours *</label>
           <select name="course_id" class="form-control" id="exampleFormControlSelect1"  required="required" disabled="disabled">
             
             <option value="{{$cours->id}}" selected="selected">{{$cours->course_name}}</option>
             
           </select>
         </div>
         <div class="form-group">
           <label for="exampleFormControlSelect1">Email</label>
            <input type="email" name="email" class="form-control">
            
           </select>
         </div>
          <div class="form-group">
           <label for="exampleFormControlSelect1">Adresse</label>
            <input type="text" name="adresse" class="form-control input-lg">
            
           </select>
         </div>
         <div class="form-group">
          
            <input type="submit" class="form-control btn btn-primary btn-customized" value="Enregistrer">
         </div>
        
       </form>
    </div>

</div>
@stop