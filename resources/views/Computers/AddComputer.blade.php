@extends('layouts.app')

@section('content')
<div class="container">
      <h1>Add new computer</h1>
      <div class="row">
        <div class="col-md-6">
          <form action="{{route('SaveComputer')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="desc">Description:</label>
          <textarea class="form-control" name="desc" rows="3" id="desc" placeholder="Description"></textarea>
          </div>
          <div class="col-12 text-right">
            <button type="submit" name="process" class="btn btn-default">Add</button>
          </div>
        </form>
        </div>
      </div>
    </div>
@endsection