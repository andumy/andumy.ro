<?php

namespace App\Http\Controllers;

use App\Models\Jobtype;
use Illuminate\Http\Request;
use App\Http\Requests\JobtypeRequest;

class JobtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobtypes = Jobtype::get();
        return view('jobtypes.index')->with([
            'jobtypes' => $jobtypes
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobtypes.form')->with([
            'action' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobtypeRequest $request)
    {
        $data = (object) $request->except(['_token','_method']);
        if(Jobtype::where('title',$data->title)->count() == 0){
            $jobtype = new Jobtype((array)$data);
            $jobtype->save();
        }
        return redirect()->route('jobtype.index');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobtype = Jobtype::findOrFail($id);
        return view('jobtypes.form')->with([
            'jobtype' => $jobtype,
            'action' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function update(JobtypeRequest $request, $id)
    {
        $data = (object) $request->except(['_token','_method']);
        $jobtype = Jobtype::findOrFail($id);
        
        $jobtype->update((array)$data);
        return redirect()->route('jobtype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobtype  $jobtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobtype $jobtype)
    {
        $jobtype->delete();
        return redirect()->route('jobtype.index');
    }
}
