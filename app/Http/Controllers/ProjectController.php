<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getData(Request $request){
       $data = "this is from data";
       return view('index', ['key'=> $data]); 
    } 
}
