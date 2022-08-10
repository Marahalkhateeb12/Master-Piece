<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Sub_Hall;
use Illuminate\Http\Request;

class SubHallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subHalls = Hall::Join('sub__halls', 'sub__halls.hall_id', '=', 'halls.id')
            ->get(['*']);

        return view('Admin.subHalls', compact('subHalls'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subHalls = Sub_Hall::all();
        $halls = Hall::all();
        return view('Admin.addSubHall', compact('subHalls', 'halls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input 
        $request->validate([
            'name' => 'required',
            'hall_id' => 'required',
            'wPeople' => 'required',
            'mPeople' => 'required',
            'area' => 'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image3' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image4' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image5' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image6' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif',
            'image7' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif'
        ]);


        $subHall = new Sub_Hall();

        $subHall->subhall_name = $request->input('name');
        $subHall->subhall_description = $request->input('name');
        $subHall->number_of_people_W = $request->input('wPeople');
        $subHall->number_of_people_M = $request->input('mPeople');
        $subHall->area = $request->input('area');
        $subHall->hall_id = $request->input('hall_id');

        if ($request->hasfile('image1')) {
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/adminImage/', $filename);
            $subHall->image1 = $filename;
        }
        if ($request->hasfile('image2')) {
            $file2 = $request->file('image2');
            $extention2 = $file2->getClientOriginalExtension();
            $filename2 = time().'.'.$extention2;
            $file2->move('public/adminImage/', $filename2);
            $subHall->image2 = $filename2;
        }
        if ($request->hasfile('image3')) {
            $file3 = $request->file('image3');
            $extention3 = $file3->getClientOriginalExtension();
            $filename3 = time().'.'.$extention3;
            $file3->move('public/adminImage/', $filename3);
            $subHall->image3 = $filename3;
        }
        if ($request->hasfile('image4')) {
            $file4 = $request->file('image4');
            $extention4 = $file4->getClientOriginalExtension();
            $filename4 = time().'.'.$extention4;
            $file4->move('public/adminImage/', $filename4);
            $subHall->image4 = $filename4;
        }
        if ($request->hasfile('image5')) {
            $file5 = $request->file('image5');
            $extention5 = $file5->getClientOriginalExtension();
            $filename5 = time().'.'.$extention5;
            $file5->move('public/adminImage/', $filename5);
            $subHall->image5 = $filename5;
        }
        if ($request->hasfile('image6')) {
            $file6 = $request->file('image6');
            $extention6 = $file5->getClientOriginalExtension();
            $filename6 = time().'.'.$extention6;
            $file6->move('public/adminImage/', $filename6);
            $subHall->image6 = $filename6;
        }
        if ($request->hasfile('image7')) {
            $file7 = $request->file('image7');
            $extention7 = $file7->getClientOriginalExtension();
            $filename7 = time().'.'.$extention7;
            $file7->move('public/adminImage/', $filename7);
            $subHall->image7 = $filename7;
        };
        $subHall->hall_id = $request->input('hall_id');
        
        $subHall->save();


        return redirect()->route('SubHalls.index')->with('success', 'Hall added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_Hall  $sub_Hall
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_Hall $sub_Hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_Hall  $sub_Hall
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subHall = Sub_Hall::where('id', $id)->first();
        $hall = Hall::all();
        return view('Admin.editSubHall', compact('subHall', 'hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub_Hall  $sub_Hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required',
            'hall_id' => 'required',
            'wPeople' => 'required',
            'mPeople' => 'required',
            'area' => 'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image3' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image4' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image5' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image6' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'image7' => 'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048'
        ]);


        $subHall = new Sub_Hall();
        if ($request->hasfile('image1')) {
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storageimages/', $filename);
            $subHall->image1 = $filename;
        }
        if ($request->hasfile('image2')) {
            $file2 = $request->file('image2');
            $extention2 = $file2->getClientOriginalExtension();
            $filename2 = time() . '.' . $extention2;
            $file2->move('public/adminImage/', $filename2);
            $subHall->image2 = $filename2;
        }
        if ($request->hasfile('image3')) {
            $file3 = $request->file('image3');
            $extention3 = $file3->getClientOriginalExtension();
            $filename3 = time() . '.' . $extention3;
            $file3->move('public/adminImage/', $filename3);
            $subHall->image3 = $filename3;
        }
        if ($request->hasfile('image4')) {
            $file4 = $request->file('image4');
            $extention4 = $file4->getClientOriginalExtension();
            $filename4 = time() . '.' . $extention4;
            $file4->move('public/adminImage/', $filename4);
            $subHall->image4 = $filename4;
        }
        if ($request->hasfile('image5')) {
            $file5 = $request->file('image5');
            $extention5 = $file5->getClientOriginalExtension();
            $filename5 = time() . '.' . $extention5;
            $file5->move('public/adminImage/', $filename5);
            $subHall->image5 = $filename5;
        }
        if ($request->hasfile('image6')) {
            $file6 = $request->file('image6');
            $extention6 = $file6->getClientOriginalExtension();
            $filename6 = time() . '.' . $extention6;
            $file6->move('public/adminImage/', $filename6);
            $subHall->image6 = $filename6;
        }
        if ($request->hasfile('image7')) {
            $file7 = $request->file('image7');
            $extention7 = $file7->getClientOriginalExtension();
            $filename7 = time() . '.' . $extention7;
            $file7->move('public/adminImage/', $filename7);
            $subHall->image7 = $filename7;
        }

        Sub_Hall::where('id', $id)->update([
            'name' => $request->subhall_name,
            'number_of_people_W' => $request->wPeople,
            'number_of_people_M' =>  $request->mPeople,
            'hall_id' => $request->hall_id,
            'area' => $request->area,
            'image1' => $subHall->image1,
            'image2' => $subHall->image2,
            'image3' => $subHall->image3,
            'image4' => $subHall->image4,
            'image5' => $subHall->image5,
            'image6' => $subHall->image6,
            'image7' => $subHall->image7,
        ]);

        return redirect()->route('SubHalls.index')->with('success', 'Hall updateded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_Hall  $sub_Hall
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Sub_Hall::find($id);
        $delete->delete();
        return redirect()->route('SubHalls.index')
            ->with('success', 'Hall deleted successfully');
    }
}
