<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;
use App\Models\Bitacora;
use Auth;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causes = Cause::orderByDesc('id')->get();
        return view('causes.index', compact('causes'));
    }

    public function index_api(){
        $causes = Cause::orderByDesc('id')->get();
        return $causes;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('causes.create');
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
            'description'   => 'required',
            
        ]);
        
        $cause = Cause::create($request->post());
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Cause created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Cause with the ID number. '.$cause->id,
            
            ]);
            

        return redirect()->route('causes.index')->with('success','Cause has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cause $cause)
    {
        return view('causes.show',compact('cause'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cause_id)
    {
        $cause = Cause::find( $cause_id );
    
        return view('causes.edit',compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cause_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $cause = Cause::find( $cause_id );
        $cause->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'Cause updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a Cause with the ID number. '.$cause_id,
            
            ]);
            
        return redirect()->route('causes.index')->with('success','Cause Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cause_id)
    {
        $cause = Cause::find( $cause_id );
        $cause->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Cause removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a Cause with the ID number. '.$country_id,
            
            ]);
            
            
        return redirect()->route('causes.index')->with('success','Cause has been deleted successfully');
    }
}
