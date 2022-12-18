<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Parish;
use App\Models\Bitacora;
use Auth;

class ParishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parishes = Parish::orderByDesc('id')->get();
        return view('parishes.index', compact('parishes'));
    }

    public function index_api(){
        $parishes = Parish::orderByDesc('id')->get();
        return $parishes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderByDesc('id')->get();
        return view('parishes.create', compact('cities'));
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
        
        $parish = Parish::create($request->post());
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Parish created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Parish with the ID number. '.$parish->id,
            
            ]);
            
            

        return redirect()->route('parishes.index')->with('success','Parish has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parish $parish)
    {
        return view('parishes.show',compact('parish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($parish_id)
    {
        $parish = Parish::find( $parish_id );
    
        return view('parishes.edit',compact('parish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $parish_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $parish = Parish::find( $parish_id );
        $parish->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'Parish updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a Parish with the ID number. '.$parish_id,
            
            ]);

        return redirect()->route('parishes.index')->with('success','Parish Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($parish_id)
    {
        $parish = City::find( $parish_id );
        $parish->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Parish removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a News with the ID number. '.$parish_id,
            
            ]);
            
        return redirect()->route('cities.index')->with('success','Parish has been deleted successfully');
    }
}
