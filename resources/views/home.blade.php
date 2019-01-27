@extends('layouts.404')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Last added parts<a href="{{route('ComputerList')}}"><button type="button" class="btn btn-outline-primary">See all parts</button></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered ">
                        <tr>
                        @if(Auth::user()->admin())
                          <th>ID</th>
                        @endif
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
                          @if(Auth::user()->admin()) 
                            <td> {{ $value->id }} </td>
                          @endif
                            <td> {{ $value->name }} </td>
                            <td> {{ $value->description }} </td>
                            <td> {{ $value->created_at }} </td>
                            <td> {!! $value->photo(true) !!} </td>
                            @if(Auth::user()->admin())
                              <td>
                                <a class="btn btn-default" href="{{route ('EditComputer',$value->id) }}" role="button">Edit<span class="glyphicon glyphicon-pencil"></span></a> / 
                                <a class="btn btn-default" href="{{route ('DeleteComputer',$value->id) }}" role="button">Delete<span class="glyphicon glyphicon-remove"></span></a>
                              </td>
                            @endif
                          </tr>
                           @endforeach
                      </table>
                </div>
                <div class="card">
                    <div class="card-header">Last registered users</div>

                    <div class="card-body">
                        <table class="table table-bordered ">
                            <tr>
                              <th>Name</th>
                              <th>Created at</th>
                              @if(Auth::user()->admin())
                                <th>Operations</th>
                              @endif
                            </tr>
                            <tr>
                              @foreach($users as $value)
                              <tr> 
                                <td> {{ $value->name }} </td>
                                <td> {{ $value->created_at }} </td>
                                @if(Auth::user()->admin())
                                  <td>
                                    <a class="btn btn-default" href="{{route ('EditUser',$value->id) }}" role="button">Edit<span class="glyphicon glyphicon-pencil"></span></a> / 
                                    <a class="btn btn-default" href="{{route ('DeleteComputer',$value->id) }}" role="button">Delete<span class="glyphicon glyphicon-remove"></span></a>
                                  </td>
                                @endif
                              </tr>
                               @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
