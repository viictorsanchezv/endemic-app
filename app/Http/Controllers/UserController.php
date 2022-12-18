<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $roles = Role::orderByDesc('id')->get();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'role_id'   => 'required',
            'password'  => 'required'
            
        ]);
        
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' =>$request->role_id,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'User created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a User with the name . '.$request->name,
            
            ]);

        
        return redirect()->route('users.index')->with('success','User has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id )
    {
        
        $user = User::find( $user_id );
    
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'role_id'   => 'required',
            'password'  => 'required',
            
        ]);
        $user = User::find( $user_id );
        $user->fill($request->post())->save();
        
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'User updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a User with the ID number. '.$user_id,
            
            ]);

        return redirect()->route('users.index')->with('success','User Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user = User::find( $user_id );
        $user->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'User removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a User with the ID number. '.$user_id,
            
            ]);
            
        return redirect()->route('users.index')->with('success','User has been deleted successfully');
    }
    
}
