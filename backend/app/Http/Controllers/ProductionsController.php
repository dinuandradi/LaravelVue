<?php

namespace App\Http\Controllers;
use App\productions;

use Illuminate\Http\Request;

class ProductionsController extends Controller
{
    
    public function getproductions(){

        $allproductions = productions::all();
        return response()->json(['allproductions'=>$allproductions],200);
    }




}
