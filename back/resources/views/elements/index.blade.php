@extends('layouts.app', ['activePage' => 'elements', 'titlePage' => __('Elements')])
@section('content')

<div class="header bg-gradient-primary pb-5 pt-5 pt-md-5">
  
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      {!! Form::open(['route' => 'element.create', 'method' => 'get']) !!}
        {!! Form::submit('Add New', ['class' => 'btn btn-primary'])!!}
      {!! Form::close()!!}
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('Elements')}}</h4>
      <p class="card-category">{{ __('Active list of current elements')}}</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
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
                {!! Form::open(['method' => 'GET', 'action' => ['CategoryController@edit', $element->category]])!!}
                  {!! Form::submit($element->category->name,['class' => 'btn btn-primary mt-4']) !!}
                {!! Form::close() !!}
              </td>
              <td>
                {!! Form::open(['method' => 'GET', 'action' => ['ElementController@edit', $element->id]])!!}
                  {!! Form::button('<i class="fa fa-edit"></i>',['type' => 'submit','class' => 'btn btn-success mt-4']) !!}
                {!! Form::close() !!}
              </td>
              <td>
                  {!! Form::open(['method' => 'DELETE', 'action' => ['ElementController@destroy', $element->id]])!!}
                  {!! Form::button('<i class="fa fa-trash"></i>',['type' => 'submit','class' => 'btn btn-danger mt-4']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
 
@endsection

