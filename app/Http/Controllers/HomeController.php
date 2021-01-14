<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homeSetting = HomeSetting::all();

        return view('index',compact('homeSetting'));
    }
}
