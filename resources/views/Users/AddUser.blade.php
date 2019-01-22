@extends('layouts.404')

@section('content')
<div class="container">
      <h1>Add new user</h1>
      <div class="row">
        <div class="col-md-6">
          <form action="{{route('SaveUser')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="name">Name here:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Georgi">
          </div>
          <div class="form-group">
            <label for="email">Email address here:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email@abv.bg">
          </div>
          <div class="form-group">
            <label for="type">Account type:</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="User/Admin/Viewer">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="col-12 text-right">
            <button type="submit" name="process" class="btn btn-default">Add</button>
          </div>
        </form>
        </div>
      </div>
    </div>
@endsection