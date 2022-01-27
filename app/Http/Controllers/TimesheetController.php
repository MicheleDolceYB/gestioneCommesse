<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timesheet;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timesheet = Timesheet::all();
        return view("timesheet.index",[
            'timesheet' => $timesheet
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("timesheet.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timesheet = Timesheet::create([
            "dependent_id" => $request->input('dependent_id'),
            "activity_id" => $request->input('activity_id'),
            "data" => $request->input('data'),
            "ore" => $request->input('ore')
        ]);
       
        return redirect('/timesheet');
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
        $timesheet = Timesheet::find($id);

        return view("timesheet.edit")->with('timesheet',$timesheet);
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
        $timesheet = Timesheet::where('id',$id)
        ->update([
            "dependent_id" => $request->input('dependent_id'),
            "activity_id" => $request->input('activity_id'),
            "data" => $request->input('data'),
            "ore" => $request->input('ore')
    ]);

    return redirect('/timesheet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timesheet = Timesheet::find($id);

        $timesheet->delete();

        return redirect('/timesheet');
    }
}
