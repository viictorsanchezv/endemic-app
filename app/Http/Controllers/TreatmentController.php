<?php

namespace App\Http\Controllers;
use App\Models\Treatment;
use Illuminate\Http\Request;
use App\Models\Bitacora;
use Auth;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::orderByDesc('id')->get();
        return view('treatments.index', compact('treatments'));
    }

    public function index_api(){
        $treatments = Treatment::orderByDesc('id')->get();
        return $treatments;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('treatments.create');
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
        
        $treatment = Treatment::create($request->post());
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Treatment created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Treatment with the ID number. '.$treatment->id,
            
            ]);

        return redirect()->route('treatments.index')->with('success','Treatment has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        return view('treatments.show',compact('treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($treatment_id)
    {
        $treatment = Treatment::find( $treatment_id );
    
        return view('treatments.edit',compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $treatment_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $treatment = Treatment::find( $treatment_id );
        $treatment->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'Treatment updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a Treatment with the ID number. '.$treatment_id,
            
            ]);
            
        return redirect()->route('treatments.index')->with('success','Treatment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($treatment_id)
    {
        $treatment = Treatment::find( $treatment_id );
        $treatment->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Treatment removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a Treatment with the ID number. '.$treatment_id,
            
            ]);
            
        return redirect()->route('treatments.index')->with('success','Treatment has been deleted successfully');
    }
}
