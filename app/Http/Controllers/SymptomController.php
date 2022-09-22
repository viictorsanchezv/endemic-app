<?php

namespace App\Http\Controllers;
use App\Models\Symptom;
use Illuminate\Http\Request;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::orderByDesc('id')->get();
        return view('symptoms.index', compact('symptoms'));
    }

    public function index_api(){
        $symptoms = Symptom::orderByDesc('id')->get();
        return $symptoms;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('symptoms.create');
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
        
        Symptom::create($request->post());

        return redirect()->route('symptoms.index')->with('success','Symptom has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Symptom $symptom)
    {
        return view('symptoms.show',compact('symptom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($symptom_id)
    {
        $symptom = Symptom::find( $symptom_id );
    
        return view('symptoms.edit',compact('symptom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $symptom_id)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            
        ]);
        $symptom = Symptom::find( $symptom_id );
        $symptom->fill($request->post())->save();

        return redirect()->route('symptoms.index')->with('success','Symptom Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($symptom_id)
    {
        $symptom = Symptom::find( $symptom_id );
        $symptom->delete();
        return redirect()->route('symptoms.index')->with('success','Symptom has been deleted successfully');
    }
}
