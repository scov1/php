@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Вернуться назад</a>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 70%" src="/storage/img/{{$post->img}}">
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
            </br>
            </br>
            </br>

            </br>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @foreach($post->comments as $comment)
                        <div class="comment">
                            <h5>Имя: {{$comment->firstName}}</h5>
                            <h6>Фамилия: {{$comment->lastName}}</h6>
                            <p style="font-size: 10px">Дата создания: {{$comment->created_at}}</p>
                            <p>Комментарий: {{$comment->comment}}</p>
                            <a  href="{{route('comments.edit',$comment->id)}}" class="btn btn-primary">Редактировать</a>
                            </br>
                            </br>
                            {!!Form::open(['action'=>['CommentController@destroy',$comment->id],"method"=>'POST',"class"=>'pull-right'])!!}
                            {{Form::hidden("_method",'DELETE')}}
                            {{Form::submit('Удалить',['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                            </br>
                            </br>
                        </div>
                    @endforeach
                </div>
            </div>
            <h3 style="margin-left: 0.5%">Добавить комментарий</h3>
            <div class="row">

        <div style="margin-left: 2%" id="comment-form" >
            {{Form::open(['route'=>['comments.store',$post->id],"method"=>'POST'])}}
                <div class="form-group">
                    {{Form::label('firstName',"Имя")}}
                    {{Form::text('firstName',null,['class'=>'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('lastName',"Фамилия")}}
                    {{Form::text('lastName',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('comment',"Комментарий")}}
                    {{Form::textarea('comment',null,['class'=>'form-control'])}}
                </div>
            {{Form::submit('Добавить',['class'=>'btn btn-primary'])}}
            {{Form::close()}}
        </div>
    </div>
@endsection
