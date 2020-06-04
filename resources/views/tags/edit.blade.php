@extends('layouts.app')

@section('content')
    <h2>Редактировать тег</h2>
    {!! Form::open(['action' => ['TagController@update',$tag->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {{Form::label('tagName','Название тега:')}}
        {{Form::text('tagName',$tag->tagName,['class'=>'form-control'])}}
    </div>


    {{form::hidden("_method",'PUT')}}
    {{Form::submit('Редактировать',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
