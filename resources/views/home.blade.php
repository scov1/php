@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Посты</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Создай свой первый пост</a>
                        </br>
                        </br>
                    @if(count($posts)>0)
                    <table class="table table stripped">
                        <tr>
                            <th>Заголовок</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Редактировать</a></th>
                            <th></th>
                        </tr>
                        @endforeach
                    </table>
                        @else

                    <h5>Ничего пока нет</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
