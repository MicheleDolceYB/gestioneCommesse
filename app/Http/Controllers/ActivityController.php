<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::all();
        return view("activity.index",[
            'activity' => $activity
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("activity.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = Activity::create([
            "project_id" => $request->input('project_id'),
            "typology" => $request->input('typology'),
            "description" => $request->input('description'),
            "state" => $request->input('state'),
            "link" => $request->input('link'),
            "avanzamento" => $request->input('avanzamento')
            
        ]);
       
        return redirect('/activity');
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
        $activity = Activity::find($id);

        return view("activity.edit")->with('activity',$activity);
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
        $activity = Activity::where('id',$id)
        ->update([
            "project_id" => $request->input('project_id'),
            "typology" => $request->input('typology'),
            "description" => $request->input('description'),
            "state" => $request->input('state'),
            "link" => $request->input('link'),
            "avanzamento" => $request->input('avanzamento')
    ]);

    return redirect('/activity');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);

        $activity->delete();

        return redirect('/activity');
    }
}
