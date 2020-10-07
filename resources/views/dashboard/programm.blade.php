@extends('layout.master')

@inject('p', 'App\Services\Programm')
@section('counter')
	@include('inc.dashboard.counter')
@stop

@section('title', 'Fitness | Programme')

@section('content')

@include('inc.dashboard.programm')
<!--Forms -->

@stop