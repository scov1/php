@extends('layouts.app')

@section('content')
    <h2>Редактировать комментарий</h2>
    {!! Form::open(['action' => ['CommentController@update',$comment->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {{Form::label('firstName','Имя:')}}
        {{Form::text('firstName',$comment->firstName,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastName','Фамилия:')}}
        {{Form::text('lastName',$comment->lastName,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('comment','Комментарий:')}}
        {{Form::textarea('comment',$comment->comment,['class'=>'form-control'])}}
    </div>

    {{form::hidden("_method",'PUT')}}
    {{Form::submit('Редактировать',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
