<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallBookController extends Controller
{
    public function getbooks(){
        $halls = Hall::latest()->paginate(10);
        return view('WeddingVenue.booking',compact('halls'));
    }
}
