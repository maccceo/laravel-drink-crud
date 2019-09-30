<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class DBController extends Controller
{
    public function showDrink() {
    	$results = Beverage::all();
    	return view('showDrink', compact('results'));
    }
}
