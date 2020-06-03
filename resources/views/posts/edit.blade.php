@extends('layouts.app')

@section('content')
    <h2>Редактировать пост</h2>
    {!! Form::open(['action' => ['PostController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Заголовок:')}}
        {{Form::text('title',$post->title,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('desc','Описание:')}}
        {{Form::textarea('desc',$post->desc,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::file('img')}}
    </div>
    {{form::hidden("_method",'PUT')}}
    {{Form::submit('Редактировать',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
