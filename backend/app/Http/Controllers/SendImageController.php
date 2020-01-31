<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendImage;
use Storage;
use URL;
class SendImageController extends Controller
{
    public function getTheImage ($name){
        $url = public_path().'/images/'.$name;
        return response()->download($url);
    } 

    public function submitimage(Request $request)
    {
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
       
        $image= new SendImage();

        $image->pname   = $request->input('pname');
        $image->pcode   = $request->input('pcode');
        $image->sendate = $request->input('sendate');
        $image->image = $imageName;
        $image->save();

        return response()->json(['message'=>$image],201);

    }

public function getimage(){

    $allimages = SendImage::all();
    return response()->json(['allimages'=>$allimages],200);
}

public function deleteimage($id){

    $image = SendImage::find($id);

    if(!$image){

        return response()->json(['project number'=>"project number was not found"],404);

    }

    $image->delete();
    return response()->json(['project number'=>"feedback deleted successfully"],201);

}
public function editimage(Request $request,$id){

    $image = SendImage::find($id);
    if(!$image){

        return response()->json(['project number'=>"project number was not found"],404);

    }

        $image->pname = $request->input('pname');
        $image->pnum = $request->input('pnum');
        $feedback->sendate = $request->input('sendate');
      

        $image->save();
    return response()->json(['msg'=>$image],200);

}
}
