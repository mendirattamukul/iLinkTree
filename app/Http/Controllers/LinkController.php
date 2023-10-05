<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
class LinkController extends Controller
{
    public function index()
    {
        return view('link.index');
    }
    public function addLink()
    {
       if(request()->validate(
        
            [
                "title"=>"required",
                "url"=>"required|url:http,https",
                "category_id"=>"required",
                
            ]
        ))
        
            Link::create(
                [
             "title"=>request('title'),
             "url"=>request('url'),
             "category_id"=>request('category_id'),
             "user_id"=>request()->user()->id
                ]);
                return back();
    
           
        
     
        
        

       
      
    }
}