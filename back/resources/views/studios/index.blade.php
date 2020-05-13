@extends('layouts.app', ['activePage' => 'studio', 'titlePage' => __('Studio')])
@section('content')

<div class="header bg-gradient-primary pb-5 pt-5 pt-md-5">
  
</div>
<div class="container-fluid">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('Studio')}}</h4>
      <p class="card-category">{{ __('Studio page details')}}</p>
    </div>
    {!! Form::model($std = new App\Studio, ['method' => 'POST', 'action' => 'StudioController@store']) !!}
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                {{ Form::label('title') }}
                {!! Form::text('title', $studio->title, ['class' => 'form-control']) !!}
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                {{ Form::label('Description') }}
                {!! Form::textarea('description', $studio->description, ['class' => 'form-control']) !!}
              </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
                </div>
            </div>
            
        </div>
    </div>
    {!! Form::close() !!}

  </div>
</div>
 
@endsection

