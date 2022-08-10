<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;

class OurHallController extends Controller
{
    //
    public function getHalls(Hall $hal)
    {
        
        $halls = Hall::latest()->paginate(10);
        $hall = Hall::find($hal->id);
      
        if (is_null($hall)) {
            abort(404);
        }
        $subhalls = Sub_Hall::where('hall_id', $hal->id)->get('*');

        return view('WeddingVenue.halls', compact('hall', 'halls', 'subhalls'));
    }
}
