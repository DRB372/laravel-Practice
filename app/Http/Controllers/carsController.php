<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;
class carsController extends Controller
{
    public function index()
    {
        return cars::all();
    }
    public function store (Request $request){
        $cars =new cars;
        $cars->Name = $request->get ('Name');
        $cars->save();  
        echo "Added $cars->Name";
    }
    public function update(Request $request,$id){
        $car=cars::where ('id',$id)->first();
        $car->Name=$request->get('Name');
        $car->save();
    }
    public function destroy(Request $request,$id)
    {
        $car=cars::where ('id',$id)->first();
        if($car->Name == 'CIVIC') {
            $car->delete();        
            echo 'DELETED';
        }
        else
        echo "Not DELETED";
    }
}
