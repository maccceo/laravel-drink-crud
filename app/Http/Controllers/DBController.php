<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class DBController extends Controller
{

    public function showDrink() {
    	$results = Beverage::all();
    	// passa da formato YYYY-MM-DD a MM/YY
    	$results = $this -> correctDateFormat($results);

    	$max = Beverage::max('price');
    	$min = Beverage::min('price');
    	$avg = round(Beverage::avg('price'), 2);

    	return view('showDrink', compact('results', 'max', 'min', 'avg'));
    }

    private function correctDateFormat($results) {
    	foreach ($results as $element) {
    		$oldDate = $element -> expiring_date;
    		// $oldDate diventa array con tre elementi: YYYY, MM, DD
    		$oldDate = explode("-", $oldDate);
    		// creo formato MM/YY
    		$newDate = $oldDate[1] . "/" . substr($oldDate[0], -2);
    		$element -> expiring_date = $newDate;
    	}
    	return $results;
    }

}
