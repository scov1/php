<?php


namespace App\Http\Controllers;


use App\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    function index(){
        $cars=Car::all();

        return view('index',compact('cars'));
    }

    function storeCar(){
        $data = request()->validate([
            'brand'=>'required',
            'model'=>'required',
            'year'=>'required',
            'color'=>'required'
        ]);
        $car = Car::on()->create($data);

        return redirect()->route('index');
    }
}
