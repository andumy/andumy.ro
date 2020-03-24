@extends('layouts.app', ['activePage' => 'elements', 'titlePage' => __('Elements')])
@section('content')
  <div class="header bg-gradient-primary pb-5 pt-5 pt-md-5"></div>

  @switch($action)
      @case('create')
          {!! Form::model($element = new App\Element, ['method' => 'POST', 'action' => 'ElementController@store', 'files' => 'true']) !!}
          @break
      @case('edit')
          {!! Form::model($element, ['method' => 'PATCH', 'action' => ['ElementController@update',$element], 'files' => 'true']) !!}
          @break
      @default
          {!! Form::model($element = new App\Element, ['method' => 'POST', 'action' => 'ElementController@store', 'files' => 'true']) !!}
  @endswitch
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">{{ __('Add New Category')}}</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-1">
                  {{ Form::label('ratio') }}
                  @if ($action === 'create')
                    {!! Form::text('ratio', null, ['class' => 'form-control']) !!}   
                  @else
                    {!! Form::text('ratio', $element->ratio, ['class' => 'form-control']) !!}   
                  @endif
                </div>
                <div class="col-6 col-lg-11">
                  {{ Form::label('link') }}
                  @if ($action === 'create')
                    {!! Form::text('link', null, ['class' => 'form-control']) !!}
                  @else
                    {!! Form::text('link', $element->link, ['class' => 'form-control']) !!}
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  {{ Form::label('Description') }}
                  @if ($action === 'create')
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                  @else
                    {!! Form::textarea('description', $element->description, ['class' => 'form-control']) !!}
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="form-group"> 
                    {{ Form::label('category') }}
                    @if ($action === 'create')
                      {{ Form::select('category_id',$category_list,null,['class' => 'form-control']) }}
                    @else
                      {{ Form::select('category_id',$category_list,$element->category->id,['class' => 'form-control']) }}
                    @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  {!! Form::label(null,'Image',['class' => 'mt-4']) !!}
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-6">
                  {!! Html::decode(Form::label('image','<i class="material-icons">backup</i> Upload file',['id' => 'upload', 'class' => 'custom-file-upload mt-4'])) !!}
                  {!! Form::file('image') !!}
                </div>
              </div>
              <div class="row">
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

@push('js')
  <script src="{{ asset('js') }}/upload-file-style.js"></script>
@endpush