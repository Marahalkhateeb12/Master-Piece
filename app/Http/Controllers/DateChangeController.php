<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Hall;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;

class DateChangeController extends Controller
{
    public function dateChange(Sub_Hall $subhal , $day){
    $dates=Date::where('date', $day ,'subhall_id' ,$subhal->id )->get('*');
    $halls = Hall::latest()->paginate(10);
        $subhall = Sub_Hall::find($subhal->id);
      
        if (is_null($subhall)) {
            abort(404);
        }
    return view('WeddingVenue.hall-single', compact('subhall', 'halls','dates'));
    }
}
