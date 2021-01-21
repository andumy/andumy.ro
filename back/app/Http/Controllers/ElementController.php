<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Element;
use App\Models\Jobtype;
use App\Models\Client;

use App\Http\Requests\ElementRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Element::orderBy('category_id')->get();
        
        return view('elements.index')->with([
            'elements' => $elements
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list = Category::all()->pluck('name','id');        
        $jobtype_list = Jobtype::all()->pluck('title','id');
        $client_list = Client::all()->pluck('name','id');

        return view('elements.form')->with([
            'action' => 'create',
            'category_list' => $category_list,
            'jobtype_list' => $jobtype_list,
            'client_list' => $client_list,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ElementRequest  $request
     * @return Response
     */
    public function store(ElementRequest $request)
    {
        $data = (object) $request->except(['_token','_method']);
        if($image = $request->file('image')){
            $path = storage_path('app/public/elements');
            $name = strtotime(Carbon::now()).$image->getClientOriginalName();
            $image->move($path,$name);
            $data->image = $name;
        }

        $element = new Element((array)$data);
        $element->save();

        return redirect()->route('element.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Element::findOrFail($id);
        $category_list = Category::all()->pluck('name','id');
        $jobtype_list = Jobtype::all()->pluck('title','id');
        $client_list = Client::all()->pluck('name','id');

        return view('elements.form')->with([
            'element' => $element,
            'action' => 'edit',
            'category_list' => $category_list,
            'jobtype_list' => $jobtype_list,
            'client_list' => $client_list,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ElementRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ElementRequest $request, $id)
    {
        $data = (object) $request->except(['_token','_method']);
        $element = Element::findOrFail($id);
        

        if($image = $request->file('image')){
            Storage::delete('/public/elements/'.$element->image);
            $path = storage_path('app/public/elements');
            $name = strtotime(Carbon::now()).$image->getClientOriginalName();
            $image->move($path,$name);
            $data->image = $name;
        }
        
        $element->update((array)$data);
        return redirect()->route('element.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Element $element)
    {
        $element->delete();
        return redirect()->route('element.index');
    }
}
