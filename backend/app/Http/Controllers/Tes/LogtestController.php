<?php

namespace App\Http\Controllers;

use App\people;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller{

    public function Login(Request $request){

        

        if(Auth::guard('web')->attempt(request(['uname','upassword'])) == false){

            return response()->json(['message'=>'invaild'],400);

        }
        
         $people = DB::table('people')->where('uname', request('uname'))->get();
         return response()->json(['message'=>$people],201);

    }






























}