<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;

class OurHallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index($id)
    // {

    //     $halls = Hall::latest()->paginate(10);
    //     $hall = Hall::find($id);
    //     if (is_null($hall)) {
    //         abort(404);
    //     }
    //     $subhalls = Sub_Hall::where('hall_id', $id)->get('*');

    //     return view('WeddingVenue.halls', compact('hall', 'halls', 'subhalls'));
    // }

   
}
