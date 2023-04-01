<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodChef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $chefs = FoodChef::all();
        $data = Food::all();
        return view('home', compact('data', 'chefs'));
    }

    public function redirectes()
    {
        $usertype = Auth::user()->usertype;
        $data = Food::all();
        $chefs = FoodChef::all();


        if($usertype == 1){
            return view('admin.adminhome');
        }else{
            return view('home', compact('data','chefs'));    
        }
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {

            return redirect()->back();
        }else{
            return redirect('login');
        }
    }
}
