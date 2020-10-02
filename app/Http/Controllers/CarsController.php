<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(3);
        return view('cars.index')->with('cars',$cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();

        $this->save($car, $request);

        return redirect('/cars')->with('success', 'Car Store');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $car = Car::where('id',request('id'))->first();
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car= Car::find($id);
        $this->save($car, $request);

        return redirect('/cars')->with('success', 'Car Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('/cars')->with('Delete', 'Car Deleted');

    }

    private function save(Car $car, Request $request){

        $this->validate($request, [
            'plate' => 'required',
            'model' => 'required',
            'renew' => 'required',
            'roadtax' => 'required',
            'prepay' => 'required',
            'ins' => 'required'
        ]);

        $car->plate = $request->plate;
        $car->model = $request->model;
        $car->renew = $request->renew;
        $car->expired = $request->expired;
        $car->roadtax = $request->roadtax;
        $car->prepay = $request->prepay;
        $car->ins = $request->ins;
        if ($request->quantity > 0){
           $car->quantity = $request->quantity;
        }
        $car->save();
    }
}
