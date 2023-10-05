<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Link;
use App\Models\User;

class linkcomponent extends Component
{
    
   
    public function render(): View|Closure|string
    {
        if(auth()->check())
        {
            return view('components.linkcomponent',['links'=>Link::where("user_id",request()->user()->id)->get(),"username"=>request()->user()->name]);
        }
        else
        {
            $user= User::firstWhere('slug',request("slug"));
            if( $user)
            {
            return view('components.linkcomponent',['links'=>Link::where("user_id", $user->id)->get(),"username"=> $user->name]);
            }
        else
        {
            abort(404, 'Page not found');
        }

        }
      

       
    }
}

