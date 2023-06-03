<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CardetailsController extends Controller
{  
    
    public function front_view()
    {
        $show=Car::all();
        return view('front_view');

    }


    public function index(Request $request)
    {

      
        $startDate = Carbon::createFromFormat('Y-m-d', $request->input('Arrival_Date'));
        $endDate = Carbon::createFromFormat('Y-m-d', $request->input('Return_Date'));  

        $check = Booking::whereBetween('Arrival_Date', [$startDate, $endDate])
        ->orWhereBetween('Return_Date', [$startDate, $endDate])
        ->get();
       $arr = array();
       foreach ($check as $s) {
           array_push($arr,$s->car_det_tbl_id);
       }
        $show=Car::all();
        return view('welcome')->with('check',$arr)->with('show',$show);

    }


 
    public function car_book_view(Request $request, $id)
    {
        $get_details=Car::find($id);
        return view('car_book_form')->with('show',$get_details);
    }   

    public function create_booking_detais(Request $request) {

        $book_details = new Booking;
        $book_details->name = $request->input('name');
        $book_details->mob_no = $request->input('mob_no');
        $book_details->email = $request->input('email');
        $book_details->no_days = $request->input('no_days');
        $book_details->address = $request->input('address');
        $book_details->Arrival_Date = $request->input('Arrival_Date');
        $book_details->Return_Date = $request->input('Return_Date');
        $book_details->car_need = $request->input('car_need');
        $book_details->car_det_tbl_id = $request->input('car_det_tbl_id');
        $book_details->save();
        return redirect('/');


    }

}
?>