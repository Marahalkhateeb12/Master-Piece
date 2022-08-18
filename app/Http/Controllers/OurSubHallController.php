<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Base_Services;
use App\Models\Date;
use App\Models\Hall;
use App\Models\Hall_Base_Service;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OurSubHallController extends Controller
{
    //getSubHalls

    public function getSubHalls(Sub_Hall $subhal)
    {

        $halls = Hall::latest()->paginate(10);
        $baseService = Base::join('hall_bases', 'hall_bases.base_service_id', '=', 'bases.id')
            ->where('hall_id', $subhal->id)->get('*');
        $addServices = Service::join('sub__hall__services', 'sub__hall__services.Service_id', '=', 'services.id')
            ->where('sub_hall_id', $subhal->id)->get('*');

        $subhall = Sub_Hall::find($subhal->id);
        $subhalls = Sub_Hall::latest()->paginate(10);

        if (is_null($subhall)) {
            abort(404);
        }
        // $subhalls = Sub_Hall::where('hall_id', $hal->id)->get('*');

        return view('WeddingVenue.hall-single', compact('subhall', 'halls', 'baseService', 'subhalls', 'addServices'));
    }









    public function checkAndBook(Sub_Hall $subhal, $day, $time, Request $request)
    {
        $halls = Hall::latest()->paginate(10);
        $baseService = Base::join('hall_bases', 'hall_bases.base_service_id', '=', 'bases.id')
            ->where('hall_id', $subhal->id)->get('*');
        $addServices = Service::join('sub__hall__services', 'sub__hall__services.Service_id', '=', 'services.id')
            ->where('sub_hall_id', $subhal->id)->get('*');

        $subhall = Sub_Hall::find($subhal->id);
        $subhalls = Sub_Hall::latest()->paginate(10);

        if (is_null($subhall)) {
            abort(404);
        }

        $book = Date::latest()->where('date','=',$request->date)->where('time' ,'=' ,$request->time)->where('status' , '=' ,5)->get('*');
        if (!is_null($book)) {
           $date=$request->date;
           $time=$request->time;
            return view('WeddingVenue.booking', compact('subhall', 'halls', 'baseService', 'subhalls', 'addServices','date','time'));
        }

        else {
            abort(404);
        }

        // $subhalls = Sub_Hall::where('hall_id', $hal->id)->get('*');

     
    }
}
