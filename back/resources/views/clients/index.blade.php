@extends('layouts.app', ['activePage' => 'clients', 'titlePage' => __('Clients')])
@section('content')

<div class="header bg-gradient-primary pb-5 pt-5 pt-md-5">
  
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      {!! Form::open(['route' => 'client.create', 'method' => 'get']) !!}
        {!! Form::submit('Add New', ['class' => 'btn btn-primary'])!!}
      {!! Form::close()!!}
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('Clients')}}</h4>
      <p class="card-category">{{ __('Active list of current clients')}}</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">{{  __('Name')  }}</th>
              <th scope="col">{{  __('Edit')  }}</th>
              <th scope="col">{{  __('Delete')  }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clients as $client)
            <tr> 
              <td>{{$client->name}}</td>
              <td>
                {!! Form::open(['method' => 'GET', 'action' => ['ClientController@edit', $client->id]])!!}
                  {!! Form::button('<i class="fa fa-edit"></i>',['type' => 'submit','class' => 'btn btn-success mt-4']) !!}
                {!! Form::close() !!}
              </td>
              <td>
                  {!! Form::open(['method' => 'DELETE', 'action' => ['ClientController@destroy', $client->id]])!!}
                  {!! Form::button('<i class="fa fa-trash"></i>',['type' => 'submit','class' => 'btn btn-danger mt-4']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
 
@endsection

