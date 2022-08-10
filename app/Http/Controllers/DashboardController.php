<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        $halls = Hall::latest()->paginate(10);
        return view('Admin.dashboard',compact('halls'));
    }
}
