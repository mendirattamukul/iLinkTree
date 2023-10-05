<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard',['categories'=>Category::all()]);
    }
    
}
