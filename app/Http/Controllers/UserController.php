<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('Admin.users', compact('users'))
        ->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addUser');
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
                    'email' => 'required',
                    'password' => 'required',
                    'address' => 'required',
                    'mobile' => 'required|regex:/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/|min:10'
                    
                ]);
        
        
                $user = new User();
               
                $user->user_name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request['password']);
                $user->user_mobile = $request->input('mobile');
                $user->user_Address = $request->input('address');
        
                $user->save();

                return redirect()->route('Users.index')->with('success', 'User added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('Admin.editUsers', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validate the input 
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'mobile' => 'required|regex:/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/|min:10'
            
        ]);

        // $update=User::find($id);
        User::where('id', $id)->update([
            'user_name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'user_mobile' => $request->mobile,
            'user_Address' => $request->address
        ]);

        return redirect()->route('Users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('Users.index')
            ->with('success', 'User deleted successfully');
    }
}
