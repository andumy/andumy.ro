<div class="container-fluid">
    <div class="row">
      <div class="col-3">
          {{ Form::label('image') }}
          {{ Form::file('image',['class' => 'form-control']) }}
      </div>
      <div class="col-3">
          {{ Form::label('ratio') }}
          @if ($action === 'create')
            {!! Form::text('ratio', null, ['class' => 'form-control', 'placeholder' => trans('Enter Ratio ...')]) !!}   
          @else
            {!! Form::text('ratio', $element->ratio, ['class' => 'form-control', 'placeholder' => trans('Enter Ratio ...')]) !!}   
          @endif
      </div>
      <div class="col-3">
          {{ Form::label('link') }}
          @if ($action === 'create')
            {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => trans('Enter Link ...')]) !!}
          @else
            {!! Form::text('link', $element->link, ['class' => 'form-control', 'placeholder' => trans('Enter Link ...')]) !!}
          @endif
      </div>
      <div class="col-3">
          {{ Form::label('category') }}
          @if ($action === 'create')
            {{ Form::select('category_id',$category_list,null,['class' => 'form-control' , 'placeholder' => trans('Enter Category ...')]) }}
          @else
            {{ Form::select('category_id',$category_list,$element->category->name,['class' => 'form-control' , 'placeholder' => trans('Enter Category ...')]) }}
          @endif
          
      </div>
    </div>
    <div class="row">
      <div class="col-6 offset-3">
        {{ Form::label('Description') }}
        @if ($action === 'create')
          {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => trans('Enter Description ...')]) !!}
        @else
          {!! Form::textarea('description', $element->description, ['class' => 'form-control', 'placeholder' => trans('Enter Description ...')]) !!}
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-2">
          {{ Form::submit('Save',['class' => 'btn btn-primary mt-4']) }}
      </div>
    </div>
  </div>