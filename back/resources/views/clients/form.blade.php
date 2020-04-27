@extends('layouts.app', ['activePage' => 'clients', 'titlePage' => __('Clients')])
@section('content')
  <div class="header bg-gradient-primary pb-5 pt-5 pt-md-5"></div>

  @switch($action)
      @case('create')
          {!! Form::model($client = new App\Client, ['method' => 'POST', 'action' => 'ClientController@store']) !!}
          @break
      @case('edit')
          {!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientController@update',$client]]) !!}
          @break
      @default
          {!! Form::model($client = new App\Client, ['method' => 'POST', 'action' => 'ClientController@store']) !!}
  @endswitch
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">{{ __('Add New Client')}}</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-5">
                  {{ Form::label('name') }}
                  @if ($action === 'create')
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                  @else
                    {!! Form::text('name', $client->name, ['class' => 'form-control']) !!}
                  @endif
                </div>
                <div class="col-12 col-xl-4">
                  {!! Form::label(null,'',['class' => 'mt-4']) !!}
                  {{ Form::submit('Save',['class' => 'btn btn-primary mt-4']) }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
@endsection
