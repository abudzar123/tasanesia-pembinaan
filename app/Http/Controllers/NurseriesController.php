<?php

namespace App\Http\Controllers;

use App\Models\nurseries;
use App\Http\Requests\StorenurseriesRequest;
use App\Http\Requests\UpdatenurseriesRequest;
use App\Models\Provinces;
use Illuminate\Http\Request;

class NurseriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_nurseries = Nurseries::all();
        if(auth()->guest()){
            abort(403); 
        } else if (auth()->user()->role !== 'petani' && auth()->user()->role !== 'admin'){
            abort(403);
        }
        return view('nurseries.index', compact('data_nurseries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Provinces::all();
        return view('nurseries.create', compact('province'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorenurseriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorenurseriesRequest $request)
    {
        Nurseries::query()->create([
            'name' => $request->name,
            'head_of_company' => $request->head_of_company,
            'address' => $request->address,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'district_id' => $request->district_id,
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'web' => $request->web,
            'bank_accountno' => $request->bank_accountno,
            'area' => $request->area,
            'monthly_omzet' => $request->monthly_omzet,
            'total_capacity' => $request->total_capacity,
            'permanent_emp'=> $request->permanent_emp,
            'non_permanent_emp'=> $request->non_permanent_emp,
            'potency'=> $request->potency,
            'is_verified'=> $request->is_verified,
            'existing_land'=> $request->existing_land,
            'developing_land'=> $request->developing_land,
            'notes'=> $request->notes,
        ]);

        return redirect()->route('nurseries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function show(nurseries $nurseries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $nurseries = \App\Models\Nurseries::find($id);
        return view('nurseries.edit', ['nurseries' =>$nurseries]);
    }

    /**
     * Showing the detail of the freakin nursery
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $nurseries = Nurseries::find($id);
        return view('nurseries.data-petani', ['nurseries' => $nurseries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatenurseriesRequest  $request
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nurseries = \App\Models\Nurseries::find($id);
        $nurseries->Update($request->all());
        return redirect('/nurseries')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nurseries  $nurseries
     * @return \Illuminate\Http\Response
     */
    public function destroy(nurseries $nurseries)
    {
        $nurseries->delete();
        return redirect()->route('nurseries.index');
    }

    

}
