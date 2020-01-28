@extends('layouts.app')
@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
        <div class="col-12">
          <div class="card shadow">
            <div class="card-body">
              <h3>{{ __('Categories') }}</h3>
              @yield('category_form')
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
          <th scope="col">{{  __('Name')  }}</th>
          <th scope="col">{{  __('Headline')  }}</th>
          <th scope="col">{{  __('Description')  }}</th>
          <th scope="col">{{  __('CTA')  }}</th>
          <th scope="col">{{  __('Order')  }}</th>
          <th scope="col">{{  __('Edit')  }}</th>
          <th scope="col">{{  __('Delete')  }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr> 
          <td><img src="{{ url('storage/categories/'.$category->image) }}" alt="{{$category->name}}" width="100px" height="100px"></td>
          <td>{{$category->name}}</td>
          <td>{{$category->headline}}</td>
          <td>
            <div style="width:300px; text-align:justify; word-break:break-all;">
              {!! wordwrap($category->description,50,"<br>\n") !!}
            </div>
          </td>
          <td>{{$category->cta}}</td>
          <td>{{$category->order}}</td>
          <td>
            {!! Form::open(['method' => 'GET', 'action' => ['CategoryController@edit', $category->id]])!!}
              {!! Form::button('<i class="fa fa-edit"></i>',['type' => 'submit','class' => 'btn btn-success mt-4']) !!}
            {!! Form::close() !!}
          </td>
          <td>
              {!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]])!!}
              {!! Form::button('<i class="fa fa-trash"></i>',['type' => 'submit','class' => 'btn btn-danger mt-4']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endif

 
@endsection

