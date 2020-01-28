<?php

namespace App\Http\Controllers;

use App\Category;
use App\Element;
use App\Http\Requests\ElementRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $category_list = Category::all()->pluck('name','id');
        return view('elements.create')->with([
            'elements' => $elements,
            'action' => 'create',
            'category_list' => $category_list
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  \App\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function edit(Element $element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Element $element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Element $element)
    {
        //
    }
}
