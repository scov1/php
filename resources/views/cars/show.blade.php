@extends('layouts.app')

@section('content')


    <form class="ml-auto" action="{{route('cars.destroy', $car)}}" method="post">
        @csrf
        <div class="form-group">
            <h3>{{$car->brand}}</h3>
            <h3>{{$car->model}}</h3>
            <h3>{{$car->year}}</h3>
            <h3>{{$car->color}}</h3>
        </div>

        @method('DELETE')
        <div class="btn-group">
            <a class="btn btn-info" href="{{route('cars.edit', $car)}}">Редактировать</a>
            <button style="margin-left: 5%" class="btn btn-danger">Удалить</button>
        </div>
    </form>



@endsection
