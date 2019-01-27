@extends('layouts.404')
@section('content')
@if(Auth::user()->admin())
<div class="container">
      <h1>Edit part</h1>
      <div class="row">
        <div class="col-md-6">
          <form action="{{route('UpdateComputer',$computer->id)}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{$computer->name}}">
            @if ($errors->first('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="picture">Photo</label>
            <input type="file" name="picture">
          </div>
          <div class="form-group">
            <label for="desc">Description:</label>
          <textarea class="form-control" name="desc" rows="3" id="desc" placeholder="Description">{{$computer->description}}</textarea>
          @if ($errors->first('desc'))
          <div class="alert alert-danger">{{ $errors->first('desc') }}</div>
          @endif
          </div>
          <div class="col-12 text-right">
            <button type="submit" name="process" class="btn btn-default">Update</button>
          </div>
        </form>
        </div>
      </div>
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