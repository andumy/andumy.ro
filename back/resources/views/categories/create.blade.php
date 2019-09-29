@extends('app.layout')
@section('content')
  {!! Form::model($caregory = new App\Category, ['method' => 'Post', 'action' => 'CategoryController@store', 'files' => 'true']) !!}
    @include('categories.form',['action' => 'create'])
  {!! Form::close() !!}
@endsection