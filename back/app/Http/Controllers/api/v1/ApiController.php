<?php

namespace App\Http\Controllers\api\v1;

use App\Category;
use App\Element;
use App\Studio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ApiController extends Controller
{
    //login for new api user
    public function login(Request $request){

        $valid_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if( !Auth::attempt($valid_data) ){
            return response()->json([
                'message' => 'Invalid credentials'
            ],401);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response([
            'user' => Auth::user(),
            'access_token' => $accessToken
        ]);
    }
    
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
                            ->get()
                            ->map(function ($element){
                                
                                return [
                                    "description" => $element->description,
                                    "url" => $element->url,
                                    "image" => url('storage/elements/'.$element->image),
                                    "year" => $element->year,
                                    "jobtype" => $element->jobtype->title,
                                    "client" => $element->client->name,
                                    "title" => $element->title,
                                ];
                            });
        return response()
                ->json($elements);
                
    }

    public function getStudio(){
        if(Studio::count() > 0){
            $studio = Studio::first();
        }
        else{
            $studio = new Studio([
                'title' => '',
                'description' => ''
            ]);
        }

        return response()->json($studio);
    }
}
