<?php

namespace App\Http\Controllers;

use App\projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function addproject(Request $request){

        $project = new projects();

        $project->pname = $request->input('pname');
        $project->pcode = $request->input('pcode');
        $project->orderdate = $request->input('orderdate');
        $project->duedate = $request->input('duedate');

        $project->save();
        
        return response()->json(['message'=>$project],201);

    }

    public function getproject(){

        $allprojects = projects::all();
        return response()->json(['allprojects'=>$allprojects],200);
    }

    public function deleteproject($id){

        $project = projects::find($id);

        if(!$project){

            return response()->json(['current projects'=>"project was not found"],404);

        }

        $project->delete();
        return response()->json(['current projects'=>"project deleted successfully"],201);

    }


    public function editproject(Request $request,$id){

        $project = projects::find($id);
        if(!$project){

            return response()->json(['current projects'=>"project was not found"],404);

        }

        $project->pname = $request->input('pname');
        $project->pcode = $request->input('pcode');
        $project->orderdate = $request->input('orderdate');
        $project->duedate = $request->input('duedate');

        $project->save();
        return response()->json(['msg'=>$project],200);

    }


    
}


