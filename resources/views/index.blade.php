@if($errors->any())
    <ul style="color:red;">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">


<form  class="form-group" action="{{route('cars.store')}}" method="POST">
    @csrf
    <input type="text" name="brand" placeholder="Марка">
    <input type="text" name="model" placeholder="Модель">
    <input type="number" name="year" placeholder="Год выпуска">
    <input type="text" name="color" placeholder="Цвет">
    <button>Добавить машину</button>
</form>
<ul>
    @foreach($cars as $car)
        <li>
            {{$car->brand}},{{$car->model}},{{$car->year}},{{$car->color}}
        </li>
    @endforeach
</ul>


