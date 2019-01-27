@extends('layouts.404')

@section('content')


<div class="wrapper">
      <div class="container-fluid" id="top-container-fluid-nav">
        <div class="container"> 
        </div>
      </div> 
      <div class="container-fluid" id="body-container-fluid">
        <div class="container text-center">  
            <div class="jumbotron">
            <h1 class="display-1">4<i class="fa  fa-spin fa-cog fa-3x"></i>4</h1>
            <h1 class="display-3">ERROR</h1>
            <p class="lower-case">{{$message}}</p>
            <a class="btn btn-default" href="{{route ('ComputerList') }}" role="button">Върни се<span class="glyphicon glyphicon-arrow-left"></span>
            </div>
        </div>
      </div>
      <div class="container-fluid" id="footer-container-fluid">
        <div class="container">
        </div>
<a href="/">Back</a>
@endsection