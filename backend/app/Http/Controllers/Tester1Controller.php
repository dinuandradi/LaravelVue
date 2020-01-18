<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tester1;

class Tester1Controller extends Controller
{
    //
    public function submitfeedback (Request $request){

        $tester = new tester1();

        $tester->PNum = $request->input('PNum');
        $tester->RDate = $request->input('RDate');
        $tester->SDate = $request->input('SDate');
        $tester->Feedback = $request->input('Feedback');

        $tester->save();
        
        return response()->json(['message'=>$tester],201);

    
}
public function getfeedback(){

    $allfeedbacks = tester1::all();
    return response()->json(['allfeedbacks'=>$allfeedbacks],200);
}

public function deletefeedback($id){

    $feedback = tester1::find($id);

    if(!$feedback){

        return response()->json(['project number'=>"project number was not found"],404);

    }

    $feedback->delete();
    return response()->json(['project number'=>"feedback deleted successfully"],201);

}
public function editfeedback(Request $request,$id){

    $feedback = tester1::find($id);
    if(!$feedback){

        return response()->json(['project number'=>"project number was not found"],404);

    }

        $feedback->PNum = $request->input('PNum');
        $feedback->RDate = $request->input('RDate');
        $feedback->SDate = $request->input('SDate');
        $feedback->Feedback = $request->input('Feedback');

        $feedback->save();
    return response()->json(['msg'=>$feedback],200);

}
}