<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cause;
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
        
        Cause::create($request->post());

        return redirect()->route('causes.index')->with('success','Cause has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('causes.show',compact('treatment'));
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
        return redirect()->route('causes.index')->with('success','Cause has been deleted successfully');
    }
}
