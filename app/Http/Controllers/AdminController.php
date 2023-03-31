<?php

namespace App\Http\Controllers;

use App\Models\Food;
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
        return view('admin/foodmenu');
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
}
