<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodChef;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function user()
    {
        $data = User::all();
        return view('admin.user', compact('data'));
    }
    
    public function deleteuser($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function foodMenu()
    {
        $data = Food::all();
        return view('admin/foodmenu', compact('data'));
    }

    public function upload (Request $request)
    {
        $data = new Food;
        $image = $request->image;
        
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title; 
        $data->price = $request->price; 
        $data->description = $request->description;
        $data->save();
        return redirect()->back(); 
    }

    public function deletefood($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editfood($id)
    {
        $data = Food::find($id);
        
        return view('admin.editfood', compact('data'));
    }
    public function updatefood(Request $request, $id)
    {
        $data = Food::find($id);
        $image = $request->image;
        
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title; 
        $data->price = $request->price; 
        $data->description = $request->description;
        $data->save();
        return redirect()->route('foodmenu');
    }

    public function reservation(Request $request)
    {
        $data = new Reservation;
        
        $data->name = $request->name;
        $data->email = $request->email; 
        $data->phone = $request->phone; 
        $data->date = $request->date;
        $data->guest = $request->guest;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data = Reservation::all();
        return view('admin.adminreservation', compact('data'));
    }
    public function viewchef()
    {
        $data = FoodChef::all();
        return view('admin.adminchef', compact('data'));
    }

    public function uploadchef(Request $request)
    {
        $data = new FoodChef;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();


        $request->image->move('chefimage', $imagename);

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->image = $imagename;

        $data->save();

        return redirect()->back();

    }


    public function deletechef($id)
    {
        $data = FoodChef::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editchef($id)
    {
        $data = FoodChef::find($id);
        
        return view('admin.editchef', compact('data'));
    }
    public function updatechef(Request $request, $id)
    {
        $data = FoodChef::find($id);
        $image = $request->image;
        
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        $data->name = $request->name; 
        $data->speciality = $request->speciality;
        $data->save();
        return redirect('/viewchef');
    }
}
