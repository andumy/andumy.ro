@extends('layouts.app', ['activePage' => 'jobtypes', 'titlePage' => __('Jobtypes')])
@section('content')
  <div class="header bg-gradient-primary pb-5 pt-5 pt-md-5"></div>

  @switch($action)
      @case('create')
          {!! Form::model($jobtype = new App\Models\Jobtype, ['method' => 'POST', 'action' => 'JobtypeController@store']) !!}
          @break
      @case('edit')
          {!! Form::model($jobtype, ['method' => 'PATCH', 'action' => ['JobtypeController@update',$jobtype]]) !!}
          @break
      @default
          {!! Form::model($jobtype = new App\Models\Jobtype, ['method' => 'POST', 'action' => 'JobtypeController@store']) !!}
  @endswitch
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">{{ __('Add New Job Type')}}</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-5">
                  {{ Form::label('title') }}
                  @if ($action === 'create')
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                  @else
                    {!! Form::text('title', $jobtype->title, ['class' => 'form-control']) !!}
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
