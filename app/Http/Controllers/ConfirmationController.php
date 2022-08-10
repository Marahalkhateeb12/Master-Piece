<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function confirmation(){
        $halls = Hall::latest()->paginate(10);
        return view('WeddingVenue.confirmation',compact('halls'));
    }
}
