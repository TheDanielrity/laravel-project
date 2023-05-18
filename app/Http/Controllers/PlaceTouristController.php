<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaceTourist;

class PlaceTouristController extends Controller
{
    public function index(){
        $places = PlaceTourist::paginate(5);
        return view('places.index')->with(['places' => $places]);
    }

    public function show_info($place_id){
        $place = PlaceTourist::find($place_id);

        return view('places.show_info')->with(['place' => $place]);
    }
}
