@extends('elements.index')
@section('element_form')
  {!! Form::model($element = new App\Element, ['method' => 'POST', 'action' => 'ElementController@store', 'files' => 'true']) !!}
    @include('elements.form')
  {!! Form::close() !!}
@endsection