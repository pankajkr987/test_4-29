<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function test(){
        echo "this is testing function";
    }
    
}

class UserController extends Controller
{
    //
    public function show($id){
        //return "<h1>called using controller</h1>";
        return view('about',compact('id'));
    }
}
