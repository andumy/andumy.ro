@extends('layouts.app')
@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-body">
              <h3>{{ __('Elements') }}</h3>
              @yield('element_form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@if ($action == 'create')
  <div class="container-fluid">
    <table class="table table-hover mt-5">
      <thead>
        <tr>
          <th scope="col">{{  __('Image')  }}</th>
          <th scope="col">{{  __('Ratio')  }}</th>
          <th scope="col">{{  __('Description')  }}</th>
          <th scope="col">{{  __('Link')  }}</th>
          <th scope="col">{{  __('Category')  }}</th>
          <th scope="col">{{  __('Edit')  }}</th>
          <th scope="col">{{  __('Delete')  }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach($elements as $element)
        <tr> 
          <td><img src="{{ url('storage/elements/'.$element->image) }}" alt="{{$element->description}}" width="100px" height="100px"></td>
          <td>{{$element->ratio}}</td>
          <td>{!! wordwrap($element->description,60,"<br>\n") !!}</td>
          <td>{!! wordwrap($element->link,60,"<br>\n") !!}</td>
          <td>
            {!! Form::open(['method' => 'GET', 'action' => ['CategoryController@show', $element->category]])!!}
              {!! Form::submit($element->category->name,['class' => 'btn btn-primary mt-4']) !!}
            {!! Form::close() !!}
          </td>
          <td>
            {!! Form::open(['method' => 'GET', 'action' => ['ElementController@edit', $element->id]])!!}
              {!! Form::submit('Edit',['class' => 'btn btn-primary mt-4']) !!}
            {!! Form::close() !!}
          </td>
          <td>
              {!! Form::open(['method' => 'DELETE', 'action' => ['ElementController@destroy', $element->id]])!!}
              {!! Form::submit('Delete',['class' => 'btn btn-danger mt-4']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endif

 
@endsection

