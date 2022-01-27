<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stima;

class StimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stima = Stima::all();
        return view("stima.index",[
            'stima' => $stima
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("stima.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stima = Stima::create([
            "dependent_id" => $request->input('dependent_id'),
            "activity_id" => $request->input('activity_id'),
            "stima" => $request->input('stima')
            
        ]);
       
        return redirect('/stima');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stima = Stima::find($id);

        return view("stima.edit")->with('stima',$stima);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stima = Stima::where('id',$id)
        ->update([
            "dependent_id" => $request->input('dependent_id'),
            "activity_id" => $request->input('activity_id'),
            "stima" => $request->input('stima')
    ]);

    return redirect('/stima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stima = Stima::find($id);

        $stima->delete();

        return redirect('/stima');
    }
}
