<?php

namespace App\Http\Controllers;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::orderByDesc('id')->get();
        return view('diseases.index', compact('diseases'));
    }

    public function index_api(){
        $diseases = Disease::orderByDesc('id')->get();
        return $diseases;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('diseases.create');
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
        
        Disease::create($request->post());

        return redirect()->route('diseases.index')->with('success','Disease has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        return view('diseases.show',compact('disease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($disease_id )
    {
        $disease = Treatment::find( $disease_id );
    
        return view('diseases.edit',compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $disease_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $disease = Disease::find( $disease_id );
        $disease->fill($request->post())->save();

        return redirect()->route('diseases.index')->with('success','Disease Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($disease_id)
    {
        $disease = Disease::find( $disease_id );
        $disease->delete();
        return redirect()->route('diseases.index')->with('success','Disease has been deleted successfully');
    }
}
