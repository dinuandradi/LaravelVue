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


    public function addproductions(Request $request){

        $production = new productions();

        $production->Pressno = $request->input('Pressno');
        $production->Partno = $request->input('Partno');
        $production->Item = $request->input('Item');
        $production->op = $request->input('op');
        $production->dl = $request->input('dl');
        $production->Material = $request->input('Material');
        $production->six_2target = $request->input('six_2target');
        $production->two_10target = $request->input('two_10target');
        $production->ten_6target = $request->input('ten_6target');
        $production->TotaltargetPrecentage = $request->input('TotaltargetPrecentage');
        $production->Machine_run_factor = $request->input('Machine_run_factor');
        $production->Actual_run_factor = $request->input('Actual_run_factor');
        $production->six_2Empl = $request->input('six_2Empl');
        $production->two_10Empl = $request->input('two_10Empl');
        $production->ten_6Empl = $request->input('ten_6Empl');
        $production->six_2Losttime = $request->input('six_2Losttime');
        $production->two_10Losttime = $request->input('two_10Losttime');
        $production->ten_6Losttime = $request->input('ten_6Losttime');
        $production->six_2GoodTotal = $request->input('six_2GoodTotal');
        $production->six_2Reject = $request->input('six_2Reject');
        $production->six_2Total = $request->input('six_2Total');
        $production->two_10Total = $request->input('two_10Total');
        $production->ten_6Total = $request->input('ten_6Total');
        $production->RejectTotal = $request->input('RejectTotal');
        $production->GoodTotal = $request->input('GoodTotal');
        $production->six_2actual_time = $request->input('six_2actual_time');
        $production->two_10actual_time = $request->input('two_10actual_time');
        $production->ten_6actual_time = $request->input('ten_6actual_time');
        $production->six_2new_target = $request->input('six_2new_target');
        $production->two_10new_target = $request->input('two_10new_target');
        $production->ten_6new_target = $request->input('ten_6new_target');
       
        $production->save();
        
        return response()->json(['message'=>$production],201);

    }


}
