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
              {{ Form::model($category = new App\Category,['route' => 'category.store', 'files' => true, ]) }}
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-3">
                        {{ Form::label('image') }}
                        {{ Form::file('image',['class' => 'form-control']) }}
                    </div>
                    <div class="col-3">
                        {{ Form::label('name') }}
                        {{ Form::text('name',null,['class' => 'form-control' , 'placeholder' => 'Name' ]) }}
                    </div>
                    <div class="col-3">
                        {{ Form::label('cta') }}
                        {{ Form::text('cta',null,['class' => 'form-control' , 'placeholder' => 'CTA']) }}
                    </div>
                    <div class="col-3">
                        {{ Form::label('order') }}
                        {{ Form::number('order',null,['class' => 'form-control' , 'placeholder' => 'Order']) }}
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-2">
                        {{ Form::submit('Save',['class' => 'btn btn-primary mt-4']) }}
                    </div>
                  </div>
                </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <table class="table table-hover mt-5">
    <thead>
      <tr>
        <th scope="col">{{  __('Image')  }}</th>
        <th scope="col">{{  __('Name')  }}</th>
        <th scope="col">{{  __('CTA')  }}</th>
        <th scope="col">{{  __('Order')  }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr> 
        <td><img src="{{ url('storage/categories/'.$category->image) }}" alt="{{$category->name}}" width="100px" height="100px"></td>
        <td>{{$category->name}}</td>
        <td>{{$category->cta}}</td>
        <td>{{$category->order}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
@endsection

