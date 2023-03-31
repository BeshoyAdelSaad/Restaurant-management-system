<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = Food::all();
        return view('home', compact('data'));
    }

    public function redirectes()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == 1){
            return view('admin.adminhome');
        }else{
            $data = Food::all();
            return view('home', compact('data'));    
        }
    }
}
