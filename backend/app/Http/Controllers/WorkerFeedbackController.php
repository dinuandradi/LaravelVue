<?php

namespace App\Http\Controllers;

use App\WorkerFeedback;

use Illuminate\Http\Request;

class WorkerFeedbackController extends Controller
{
    public function Workerfeedback(Request $request){

        $feed = new WorkerFeedback();

        $feed->UNum = $request->input('UNum');
        $feed->EName = $request->input('EName');
        $feed->RDate = $request->input('RDate');
        $feed->Feedback = $request->input('Feedback');

        $feed->save();
        
        return response()->json(['message'=>$feed],201);
    }

    public function getfeedback(){

        $allfeedbacks = WorkerFeedback::all();
        return response()->json(['allfeedbacks'=>$allfeedbacks],200);
    }
    

}
