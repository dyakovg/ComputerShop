@extends('layouts.404')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h1>Computer List</h1>
        </div>
        <div class="col-9 text-right">
          <a href="{{route('AddComputer')}}"><button type="button" class="btn btn-primary">Add new computer</button></a>
        </div>
      </div>
      <table class="table table-bordered ">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Date</th>
          <th>Photo</th>
          @if(Auth::user()->admin())
            <th>Operations</th>
          @endif
        </tr>
        <tr>
          @foreach($computers as $value)
          <tr> 
            <td> {{ $value->id }} </td>
            <td> {{ $value->name }} </td>
            <td> {{ $value->description }} </td>
            <td> {{ $value->created_at }} </td>
            <td> {{ $value->photo(true) }} </td>
            @if(Auth::user()->admin())
              <td>
                <a class="btn btn-default" href="{{route ('EditComputer',$value->id) }}" role="button">Edit<span class="glyphicon glyphicon-pencil"></span></a> / 
                <a class="btn btn-default" href="{{route ('DeleteComputer',$value->id) }}" role="button">Delete<span class="glyphicon glyphicon-remove"></span></a>
              </td>
            @endif
          </tr>
           @endforeach
           {{$computers->links()}}
      </table>
    </div>
@endsection