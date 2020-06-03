@extends('layouts.app')

@section('content')
    <h2>Создать пост</h2>
    {!! Form::open(['action' => 'PostController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Заголовок:')}}
        {{Form::text('title','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('desc','Описание:')}}
        {{Form::textarea('desc','',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::file('img')}}
    </div>
    {{Form::submit('Создать',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
