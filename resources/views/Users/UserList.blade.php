@extends('layouts.404')

@section('content')
@if(Auth::user()->admin())
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h1>Users list</h1>
        </div>
        <div class="col-9 text-right">
          <a href="{{route('AddUser')}}"><button type="button" class="btn btn-primary">Add new user</button></a>
        </div>
      </div>
      <table class="table table-bordered ">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Type</th>
          <th>Email</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Operations</th>
        </tr>
        <tr>
          @foreach($users as $value)
          <tr> 
            <td> {{ $value->id }} </td>
            <td> {{ $value->name }} </td>
            <td> {{ $value->type }} </td>
            <td> {{ $value->email }} </td>
            <td> {{ $value->created_at }} </td>
            <td> {{ $value->updated_at }} </td>
              <td>
                <a class="btn btn-default" href="{{route ('EditUser',$value->id) }}" role="button">Edit<span class="glyphicon glyphicon-pencil"></span></a> / 
                <a class="btn btn-default" href="{{route ('DeleteComputer',$value->id) }}" role="button">Delete<span class="glyphicon glyphicon-remove"></span></a>
              </td>
          </tr>
           @endforeach
           {{$users->links()}}
      </table>
    </div>
@endif
@if(Auth::user()->user())
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
            <p class="lower-case">Webpage not found please try to refresh</p>
            <p class="lower-case">Maybe the page is under maintenance</p>
            <a class="btn btn-default" href="{{route ('ComputerList') }}" role="button">Върни се<span class="glyphicon glyphicon-arrow-left"></span>
            </div>
        </div>
      </div>
      <div class="container-fluid" id="footer-container-fluid">
        <div class="container">
        </div>
@endif
@endsection