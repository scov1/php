@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center mb-3">
    <a href="{{route('cars.create')}}" class=" ml-auto btn btn-success">
        Добавить машину
    </a>
</div>

@forelse($cars as $car)

    @if($loop->first)
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th scope="col">Марка</th>
                <th scope="col">Модель</th>
                <th scope="col">Год выпуска</th>
                <th scope="col">Цвет</th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            @endif
            <tr>
                <td class="p-2 text-center">{{ $car->id }}</td>
                <td class="pd-0">
                    <a href="{{ route('cars.show', $car) }}" class="d-block p-2 w-100">
                        {{ $car->brand }}
                    </a>
                </td>
                <td class="p-2">{{ $car->model }}</td>
                <td class="p-2">{{ $car->year }}</td>
                <td class="p-2">{{ $car->color }}</td>
                <td>
                    <form class="ml-auto" action="{{ route('cars.destroy', $car) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="btn-group">
                            @can('update', $car)
                                <a class="btn btn-info" href="{{ route('cars.edit', $car) }}">Редактировать</a>
                            @endcan
                            @can('delete', $car)
                                <button class="btn btn-danger" style="margin-left: 10%">Удалить</button>
                            @endcan
                        </div>
                    </form>
                </td>
            </tr>

            @if($loop->last)
            </tbody>
        </table>
    @endif

@empty
    <div class="alert alert-secondary">
        У Вас пока нет ни одной карты животного :(
    </div>

@endforelse
@endsection
