@extends('elements.index')
@section('element_form')
  {!! Form::model($element, ['method' => 'PATCH', 'action' => ['ElementController@update',$element], 'files' => 'true']) !!}
    @include('elements.form')
  {!! Form::close() !!}
@endsection