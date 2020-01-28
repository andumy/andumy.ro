@extends('categories.index')
@section('category_form')
  {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update',$category], 'files' => 'true']) !!}
    @include('categories.form')
  {!! Form::close() !!}
@endsection