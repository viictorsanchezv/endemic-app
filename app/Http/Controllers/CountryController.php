<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Bitacora;
use Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderByDesc('id')->get();
        return view('countries.index', compact('countries'));

    }

    public function index_api(){
        $countries = Country::orderByDesc('id')->get();
        return $countries;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
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
        
        
        $country = Country::create($request->post());
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Country created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Country with the ID number. '.$country->id,
            
            ]);
        
        return redirect()->route('countries.index')->with('success','Country has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('countries.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($country_id)
    {
        $country = Country::find( $country_id );
    
        return view('countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $country_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $country = Country::find( $country_id );
        $country->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Country updated',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been updated a Country with the ID number. '.$country_id,
            
            ]);
            
        return redirect()->route('countries.index')->with('success','Country Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($country_id)
    {
        $country = Country::find( $country_id );
        $country->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Country removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a Country with the ID number. '.$country_id,
            
            ]);
            
        return redirect()->route('countries.index')->with('success','Country has been deleted successfully');
    }
}
