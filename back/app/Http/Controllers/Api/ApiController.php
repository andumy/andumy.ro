<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Element;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    /**
     * Consume all categories
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategories(){
        $categories = Category::orderBy('order','ASC')
                        ->get();
        return response()
                ->json($categories);
                
    }

    /**
     * Consume all elements
     *
     * @param int $category_id
     * @return \Illuminate\Http\Response
     */
    public function getElements($category_id){
        $elements = Element::where('category_id',$category_id)
                            ->get();
        return response()
                ->json($elements);
                
    }


}
