<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Bitacora;
use Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderByDesc('id')->get();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
            'name'          => 'required',
        ]);
        
        $role = Role::create($request->post());

        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Role created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Role with the ID number. '.$role->id,
            
            ]);
            
            
        
        return redirect()->route('roles.index')->with('success','Role has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($role_id)
    {
        $role = Role::find( $role_id );
    
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $role_id)
    {
       $request->validate([
            'name'          => 'required',
            
        ]);
        $role = Role::find( $role_id );
        $role->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'Role updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a Role with the ID number. '.$role_id,
            
            ]);

        return redirect()->route('roles.index')->with('success','Role Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($role_id)
    {
        $role = Role::find( $role_id );
        $role->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Role removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a Role with the ID number. '.$role_id,
            
            ]);
            
        return redirect()->route('roles.index')->with('success','Role has been deleted successfully');
    }
}
