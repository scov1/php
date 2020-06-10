<?php


namespace App\Http\Controllers;


use App\Car;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarController extends Controller
{
    function index(){
        $user = auth()->user();
       $cars=Car::all();

        return view('index',compact('cars'));
    }

    public function store(Request $request){
       $this ->authorize('create',Car::class);
       $data=$this->validated($request);

       $cars = auth()->user()->cars();
       $new=$cars->create($data);

        return redirect()->route('cars.show', [ 'car' => $new->id ]);
    }

    public function create(){
        $this->authorize('create', Car::class);

        return view('cars.form');
    }

    public function update(Request $request,Car $car){
        $data = $this->validated($request,$car);

        $car->update($data);
        return redirect()->route('cars.show',$car);
    }

    public function show(Car $car)
    {
        $this->authorize('update', $car);
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car){
        return view('cars.form',compact('car'));
    }

    protected function validated(Request $request, Car $car = null)
    {
        $rules = [
            'brand' => 'required|min:5|max:100',
            'model'=> 'required',
            'year' => 'nullable',
            'color' => 'required',
        ];

        if($car)
            $rules['brand'] .= ',brand,' . $car->id;

        return $request->validate($rules);
    }

    public function destroy(Car $car)
    {
        $this->authorize('delete', $car);

        $car->delete();
        return redirect()->route('cars.index');
    }
}
