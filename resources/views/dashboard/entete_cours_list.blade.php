@extends('layout.master')



@section('title', 'Fitness Zone | Entetes de cours')

@section('content')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="widget box">
    @if(session('message'))
      @include('message.message')
    @endif

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Intitulé du cours</th>
          <th scope="col">Opérations</th>

        </tr>
      </thead>
      <tbody>
        @foreach($entetes as $entete)
        <tr>
          <th scope="row">{{++$loop->index}}</th>
          <td>
            {{$entete->name_of_cat}} 
           
          </td>
         
          <td>
             <a data-toggle="modal" href="#entete_cours{{$entete->id}}" class="btn btn-primary btn-xs"><i class="icon-edit"></i></a>
             <a data-method="DELETE" data-confirm="Êtes-vous sûr de vouloir supprimer ?" href="{{route('delete-entete', $entete->id)}}" class="btn btn-danger btn-xs"><i class="icon-trash"></i></a>
          </td>
        </tr>
          @include('inc.dashboard.edit_entete_modal')
        @endforeach
      </tbody>
    </table>

@stop