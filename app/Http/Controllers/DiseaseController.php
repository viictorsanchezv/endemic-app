<?php

namespace App\Http\Controllers;
use App\Models\Disease;
use App\Models\DiseaseSymptoms;
use App\Models\Cause;
use App\Models\CauseDisease;
use App\Models\Symptom;
use App\Models\Treatment;
use App\Models\DiseaseTreatment;
use App\Models\City;
use App\Models\CityDisease;
use Illuminate\Http\Request;
use App\Models\Bitacora;
use Auth;

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
        $symptoms = Symptom::orderByDesc('id')->get();
        $causes = Cause::orderByDesc('id')->get();
        $treatments = Treatment::orderByDesc('id')->get();
        $cities = City::orderByDesc('id')->get();
        return view('diseases.create',compact('symptoms', 'causes','treatments','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $disease = Disease::create(['name'          => $request->name, 
                                    'description'   => $request->description]);

        DiseaseSymptoms::create([   'symptoms_id'    => $request->symptoms_id,
                                    'disease_id'     => $disease->id]);

        CauseDisease::create([  'cause_id'      => $request->symptoms_id,
                                'disease_id'    => $disease->id]);

        DiseaseTreatment::create([  'treatments_id' => $request->treatments_id,
                                    'disease_id'    => $disease->id]);                    
     
        CityDisease::create([   'date'      => $request->date,
                                'cases'     => $request->cases,
                                'disease_id'=> $disease->id,
                                'city_id'   => $request->city_id,
                            
                            ]); 
                                
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Disease created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a Disease with the ID number. '.$disease->id,
            
            ]);
            
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
        $disease = Disease::find( $disease_id );
        $symptoms = Symptom::orderByDesc('id')->get();
        $causes = Cause::orderByDesc('id')->get();
        $treatments = Treatment::orderByDesc('id')->get();
        $cities = City::orderByDesc('id')->get();
        
        
        
        return view('diseases.edit',compact('disease','symptoms', 'causes','treatments','cities'));
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
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'Disease updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a Disease with the ID number. '.$disease_id,
            
            ]);
            

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
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'Disease removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a Disease with the ID number. '.$disease_id,
            
            ]);
            
        return redirect()->route('diseases.index')->with('success','Disease has been deleted successfully');
    }
}
