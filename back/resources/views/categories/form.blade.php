@extends('layouts.app', ['activePage' => 'categories', 'titlePage' => __('Categories')])
@section('content')
  <div class="header bg-gradient-primary pb-5 pt-5 pt-md-5"></div>

  @switch($action)
      @case('create')
          {!! Form::model($caregory = new App\Models\Category, ['method' => 'POST', 'action' => 'CategoryController@store', 'files' => 'true']) !!}
          @break
      @case('edit')
          {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update',$category], 'files' => 'true']) !!}
          @break
      @default
          {!! Form::model($caregory = new App\Models\Category, ['method' => 'POST', 'action' => 'CategoryController@store', 'files' => 'true']) !!}
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
                    {{ Form::label('order', 'Order',['class' => 'form-label mt-4']) }}
                    @if ($action === 'create')
                      {{ Form::number('order',null,['class' => 'form-control']) }}
                    @else
                      {{ Form::number('order',$category->order,['class' => 'form-control' ]) }}
                    @endif
                  </div>
                  <div class="col-6 col-lg-11">
                    {{ Form::label('name','Name',['class' => 'form-label mt-4']) }}
                    @if ($action === 'create')
                      {!! Form::text('name', null, ['class' => 'form-control']) !!}   
                    @else
                      {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}   
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="container-fluid">
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