@extends('categories.index')
@section('category_form')
  {!! Form::model($caregory = new App\Category, ['method' => 'POST', 'action' => 'CategoryController@store', 'files' => 'true']) !!}
    @include('categories.form')
  {!! Form::close() !!}
@endsection