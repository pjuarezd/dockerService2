<?php
 
namespace App\Http\Controllers;
 
use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class CarController extends Controller{
 
 
    public function index(){
 
        $Cars  = Car::all();
 
        return response()->json($Cars);
 
    }
 
    public function getCar($id){
 
        $Car  = Car::find($id);
 
        return response()->json($Car);
    }
 
    public function createCar(Request $request){
 
        $Car = Car::create($request->all());
 
        return response()->json($Car);
 
    }
 
    public function deleteCar($id){
        $Car  = Car::find($id);
        $Car->delete();

        return response()->json('success');
    }
 
    public function updateCar(Request $request,$id){
        $Car  = Car::find($id);
        $Car->model = $request->input('model');
        $Car->year = $request->input('year');
        $Car->manufacturer = $request->input('manufacturer');
        $Car->save();
 
        return response()->json($Book);
    }
 
}