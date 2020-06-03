@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Вернуться назад</a>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 100%" src="/storage/img/{{$post->img}}">
        </div>
    </div>
    </br>
    </br>
   <h2>{{$post->title}}</h2>
   <h5>{{$post->desc}}</h5>
    <small>Дата создания {{$post->created_at}}</small>
    </br>
    </br>
    </br>
    @if(!Auth::guest())
        @if(Auth::user()->id==$post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Редактировать</a>
            </br>
            </br>
            {!!Form::open(['action'=>['PostController@destroy',$post->id],"method"=>'POST',"class"=>'pull-right'])!!}
            {{Form::hidden("_method",'DELETE')}}
            {{Form::submit('Удалить',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection
