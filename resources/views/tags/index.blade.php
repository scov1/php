@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Вернуться назад</a>
            <div class="row">
                <div class="col-md-7">
                    <table class="table table stripped">
                        <tr>
                            <th>Список тегов</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($tags as $tag)
                            <tr>
                                <th><a href="{{route('tags.show',$tag->id)}}">{{$tag->tagName}}</a></th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="btn-group btn-group-sm">
                                        <a style="margin-right: 4%" class="btn btn-xs btn-info" href="{{route('tags.edit',$tag->id)}}">Редактировать</a>
                                        {!!Form::open(['action'=>['TagController@destroy',$tag->id],"method"=>'POST',"class"=>'pull-right'])!!}
                                        {{Form::hidden("_method",'DELETE')}}
                                        {{Form::submit('Удалить',['class'=>'btn btn-xs btn-danger'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Создать тег</h5>
                        {!! Form::open(['action' => 'TagController@store','method'=>'POST']) !!}
                        {{Form::label('tagName','Название тега:')}}
                        {{Form::text('tagName',null,['class'=>'form-control'])}}
                    </div>

                    {{Form::submit('Создать',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}

                </div>
            </div>

@endsection
