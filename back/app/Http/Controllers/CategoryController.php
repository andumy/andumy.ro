<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Element;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::orderBy('order')->get();
        return view('categories.index')->with([
            'categories' => $categories
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.form')->with([
            'action' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest  $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        $data = (object) $request->except(['_token','_method']);
        if($data->order == null){
            if(Category::count() == 0){
                $data->order = 0;
            }
            else{
                $data->order = Category::orderBy('order','DESC')->first()->order+1;
            }
        }
        if(Category::where('name',$data->name)->count() == 0){
            $category = new Category((array)$data);
            $category->save();
        }
        return redirect()->route('category.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.form')->with([
            'category' => $category,
            'action' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = (object) $request->except(['_token','_method']);
        $category = Category::findOrFail($id);
        
        $category->update((array)$data);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {   
        $category->delete();
        return redirect()->route('category.index');
    }
}
