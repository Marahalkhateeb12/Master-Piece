<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::latest()->paginate(10);
        return view('Admin.halls',compact('halls'))
            ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addHall');
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
            'description' => 'required',
            'location' => 'required',
            'address' => 'required',
            'hours' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'mobile' => 'required|regex:/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/|min:10',
            'image' =>'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048'
        ]);



        
         $hall= new Hall();

         $hall->hall_name=$request->input('name');
         $hall->hall_description=$request->input('description');
         $hall->location=$request->input('location');
         $hall->hall_address=$request->input('address');
         $hall->hours=$request->input('hours');
         $hall->facebook=$request->input('facebook');
         $hall->instagram=$request->input('instagram');
         $hall->hall_mobile=$request->input('mobile');
         
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/adminImage/', $filename);
            $hall->image = $filename;
        }

        $hall->save();


        return redirect()->route('Halls.index')->with('success','Hall added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show(Hall $hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall = Hall::where('id', $id)->first();
        
        return view('Admin.editHall',compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'address' => 'required',
            'hours' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'mobile' => 'required|regex:/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/|min:10',
            'image' =>'required|image|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048'
        ]);

    $hall = new Hall();
    if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('public/adminImage/', $filename);
        $hall->image = $filename;
    }

    Hall::where('id',$id)->update([
        'hall_name'=>$request->name,
        'facebook'=>$request->facebook,
        'instagram'=>$request->instagram,
        'location'=>$request->location,
        'hall_address'=>$request->address,
        'hours'=>$request->hours,
        'hall_mobile'=>$request->mobile,
        'hall_description'=>$request->description,
        'image'=> $hall->image
    ]);
    
     return redirect()->route('Halls.index')->with('success','Hall updateded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $delete = Hall::find($id);
        $delete->delete();
        return redirect()->route('Halls.index')
                        ->with('success','Hall deleted successfully');
    }
}
