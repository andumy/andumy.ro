<div class="container-fluid">
  <div class="row">
    <div class="col-3">
        {{ Form::label('image') }}
        {{ Form::file('image',['class' => 'form-control']) }}
    </div>
    <div class="col-3">
        {{ Form::label('name') }}
        @if ($action === 'create')
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
        @else
          {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
        @endif
    </div>
    <div class="col-3">
        {{ Form::label('cta') }}
        @if ($action === 'create')
          {!! Form::text('cta', null, ['class' => 'form-control', 'placeholder' => trans('Enter CTA ...')]) !!}
        @else
          {!! Form::text('cta', $category->cta, ['class' => 'form-control', 'placeholder' => trans('Enter CTA ...')]) !!}
        @endif
    </div>
    <div class="col-3">
        {{ Form::label('order') }}
        @if ($action === 'create')
          {{ Form::number('order',null,['class' => 'form-control' , 'placeholder' => trans('Order ...')]) }}
        @else
          {{ Form::number('order',$category->order,['class' => 'form-control' , 'placeholder' => trans('Order ...')]) }}
        @endif
        
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3">
        {{ Form::label('headline') }}
        @if ($action === 'create')
          {!! Form::text('headline', null, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
        @else
          {!! Form::text('headline', $category->headline, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
        @endif
    </div>
  </div>
  <div class="row">
    <div class="col-6 offset-3">
      {{ Form::label('Description') }}
      @if ($action === 'create')
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('Enter Description ...')]) !!}
      @else
        {!! Form::textarea('description', $category->description, ['class' => 'form-control', 'placeholder' => trans('Enter Description ...')]) !!}
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-2">
        {{ Form::submit('Save',['class' => 'btn btn-primary mt-4']) }}
    </div>
  </div>
</div>