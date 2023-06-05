<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class AdminController extends Controller
{



    public function create_new_car()
    {
        
        return view('admin/create_car_details');

    }

    public function post_new_car(Request $request) {


        $request->validate([
          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $carImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $carImage);
            $input['image'] = "$carImage";
        }
    
        Car::create($input);
        return redirect("create_new_car")->withSuccess('Car details created successfully.');

    }
    public function list_car(Request $request) {
        $car=Car::all();
       
        return view('admin.list_car')->with('car',$car);
    }
    public function edit(car $car)
    {
        return view('admin.edit_car',compact('car'));
    }

    public function update(Request $request, car $car)
    {
       
        $request->validate([
            'name' => 'required',
           
        ]);
       
        $input = $request->all();
     
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $carImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $carImage);
            $input['image'] = "$carImage";
        }else{
            unset($input['image']);
        }
        $car->update($input);
     
        return redirect("list_car")->withSuccess('Car details updated successfully.');
    }
    public function destroy(car $car)
    {
        $car->delete();
        return redirect("list_car")->withSuccess('Product deleted successfully.');

    }
}
