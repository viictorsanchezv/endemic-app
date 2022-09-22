<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::orderByDesc('id')->get();
        return view('states.index', compact('states'));
    }

    public function index_api(){
        $states = State::orderByDesc('id')->get();
        return $states;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderByDesc('id')->get();
        return view('states.create', compact('countries'));
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
            'country_id'    => 'required'
        ]);
        
        State::create($request->post());

        return redirect()->route('states.index')->with('success','State has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        return view('states.show',compact('state'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($state_id)
    {
        $state = State::find( $state_id );
    
        return view('states.edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $state_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $state = State::find( $state_id );
        $state->fill($request->post())->save();

        return redirect()->route('states.index')->with('success','State Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($state_id)
    {
        $state = State::find( $state_id );
        $state->delete();
        return redirect()->route('states.index')->with('success','State has been deleted successfully');
    }
}
