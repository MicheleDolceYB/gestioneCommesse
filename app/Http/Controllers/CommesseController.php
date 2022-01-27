<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commesse;

class CommesseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commesse = Commesse::all();
        return view("commesse.index",[
            'commesse' => $commesse
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("commesse.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commesse = Commesse::create([
            "client_id" => $request->input('client_id'),
            "stato" => $request->input('stato'),
            "link" => $request->input('link'),
            "description" => $request->input('description')
        ]);
       
        return redirect('/commesse');
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
        $commesse = Commesse::find($id);

        return view("commesse.edit")->with('commesse',$commesse);
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
        $commesse = Commesse::where('id',$id)
        ->update([
            "client_id" => $request->input('client_id'),
            "stato" => $request->input('stato'),
            "link" => $request->input('link'),
            "description" => $request->input('description')
    ]);

    return redirect('/commesse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commesse = Commesse::find($id);

        $commesse->delete();

        return redirect('/commesse');
    }
}
