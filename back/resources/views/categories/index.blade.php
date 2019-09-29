@extends('app.layout')
@section('content')
  <ul>
    @foreach($categories as $category){
      <li> 
        <img src="{{$category->image}}" alt="{{$category->name}}">
        {{$category->name}}
        {{$category->cta}}
      </li>
    }
  </ul>  
@endsection