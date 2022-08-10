<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;

class OurSubHallController extends Controller
{
    //getSubHalls

    public function getSubHalls(Sub_Hall $subhal)
    {
        
        $halls = Hall::latest()->paginate(10);
        $subhall = Sub_Hall::find($subhal->id);
      
        if (is_null($subhall)) {
            abort(404);
        }
       // $subhalls = Sub_Hall::where('hall_id', $hal->id)->get('*');

        return view('WeddingVenue.hall-single', compact('subhall', 'halls'));
    }
}
