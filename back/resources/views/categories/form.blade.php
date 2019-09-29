{!! Form::label('name','Name:')!!}
@if ($action === 'create')
  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
@else
  {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => trans('Enter Name ...')]) !!}   
@endif

{!! Form::label('cta','Cta:')!!}
@if ($action === 'create')
  {!! Form::text('cta', null, ['class' => 'form-control', 'placeholder' => trans('Enter CTA ...')]) !!}
@else
  {!! Form::text('cta', $category->cta, ['class' => 'form-control', 'placeholder' => trans('Enter CTA ...')]) !!}
@endif

{!! Form::label('image', 'Image:') !!}
{!! Form::file('image') !!}

{!! Form::submit('Save')!!}