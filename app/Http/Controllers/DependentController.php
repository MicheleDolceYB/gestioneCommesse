<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependent;

class DependentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dependent = Dependent::all();
        return view("dependent.index",[
            'dependent' => $dependent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dependent.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dependent = Dependent::create([
            "name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "email" => $request->input('email')
        ]);
       
        return redirect('/dependent');
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
        $dependent = Dependent::find($id);

        return view("dependent.edit")->with('dependent',$dependent);
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
        $dependent = Dependent::where('id',$id)
        ->update([
            "name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "email" => $request->input('email') 
    ]);

    return redirect('/dependent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependent = Dependent::find($id);

        $dependent->delete();

        return redirect('/dependent');
    }
}
