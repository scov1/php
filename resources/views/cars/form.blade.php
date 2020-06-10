<?php
$update = isset($car);
?>

@extends('layouts.app')

@section('content')

<form class="container" action="{{ $update ? route('cars.update', $car) : route('cars.store')}}" method="post">
    @csrf
    @if($update)
        @method('PUT')
    @endif
    <div class="form-group">
    <input class="form-control" type="text" name="brand" id="brand" placeholder="Марка...">
    </div>
    <div class="form-group">
    <input class="form-control" type="text" name="model" id="model" placeholder="Модель...">
    </div>
    <div class="form-group">
    <input class="form-control" type="number" name="year" id="year" placeholder="Год выпуска...">
    </div>
    <div class="form-group">
    <input class="form-control" type="text" name="color" id="color" placeholder="Цвет...">
    </div>
    <button class="btn btn-success">{{$update? 'Обновить' : 'Добавить'}}</button>
</form>

@endsection
