<?php

namespace App\Http\ViewComposers;

use App\Repositories\UserRepository;
use Illuminate\View\View;
use App\Models\Studio;

class StudioComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if(Studio::count() > 0){
            $studio = Studio::first();
        }
        else{
            $studio = new Studio([
                'title' => '',
                'description' => ''
            ]);
        }
        $view->with([
            'studio' => $studio
        ]);
    }
}