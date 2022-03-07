<?php

namespace App\Http\Controllers;

use App\Models\ProjectLocation;
use App\Http\Requests\StoreProject_LocationRequest;
use App\Http\Requests\UpdateProject_LocationRequest;
use Illuminate\Http\Request;


class ProjectLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_project_location = ProjectLocation::all();
        return view('project_location.index', compact('data_project_location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProject_LocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject_LocationRequest $request)
    {
        ProjectLocation::query()->create([
            'project_id' => $request->project_id,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'location' => $request->location,
            'notes' => $request->notes,
        ]);

        return redirect()->route('project_location.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project_Location  $project_Location
     * @return \Illuminate\Http\Response
     */
    public function show(Project_Location $project_location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project_Location  $project_Location
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $project_location = \App\Models\ProjectLocation::find($id);
        return view('project_location.edit', ['project_location' =>$project_location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProject_LocationRequest  $request
     * @param  \App\Models\Project_Location  $project_Location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_location = \App\Models\ProjectLocation::find($id);
        $project_location->Update($request->all());
        return redirect('/project_location')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project_Location  $project_Location
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectLocation $project_location)
    {
        $project_location->delete();
        return redirect()->route('project_location.index');
    }
}
