<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tester1;
use App\SendImage;

class Tester1Controller extends Controller
{
    public function index (Request $request){
        $tester = tester1::get();
        return response()->json(['message'=>$tester],201);
    }
    
    public function getListOfDesigner (Request $request){
        $data = SendImage::get();
        return response()->json(['message'=>$data],201);
    }

    public function submitfeedback (Request $request){
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $tester = new tester1();

        $tester->PNum = $request->input('PNum');
        $tester->RDate = $request->input('RDate');
        $tester->SDate = $request->input('SDate');
        $tester->Feedback = $request->input('Feedback');
        $tester->image = $imageName;

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