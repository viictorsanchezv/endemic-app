<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Bitacora;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = News::orderByDesc('id')->get();
        return view('news.index', compact('news'));

    }

    public function index_api(){
        $news = News::orderByDesc('id')->get();
        return $news;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title'         => 'required',
            'description'   => 'required',
            'date'          => 'required',
        ]);
        
        $new  = News::create($request->post());
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'News created',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been created a News with the ID number. '.$new->id,
            
            ]);
            
            

        return redirect()->route('news.index')->with('success','New has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $new)
    {
        return view('news.show',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($new_id)
    {
        $new = News::find( $new_id );
    
        return view('news.edit',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $new_id)
    {
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'date'          => 'required',
        ]);
        $new = News::find( $new_id );
        $new->fill($request->post())->save();
        
        Bitacora::create([
            'user_id'       => Auth::user()->id,
            'name'          => 'News updated',
            'description'   =>'User with the ID number: '.Auth::user()->id.' has been updated a News with the ID number. '.$new_id,
            
            ]);
            


        return redirect()->route('news.index')->with('success','New Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($new_id)
    {
        $new = News::find( $new_id );
        $new->delete();
        
        Bitacora::create([
            'user_id'   => Auth::user()->id,
            'name'      => 'News removed',
            'description'=>'User with the ID number: '.Auth::user()->id.' has been removed a News with the ID number. '.$new_id,
            
            ]);
            
        return redirect()->route('news.index')->with('success','New has been deleted successfully');
    }
}
