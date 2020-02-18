<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $login = login::create([
            'ufname'=> $request->ufname,
            'ulname'=> $request->ulname,
            'uid'=> $request->uid,
            'uemail'=> $request->uemail,
            'udep'=> $request->udep,
            'ulevel'=> $request->ulevel,
            'upassword'=>bcrypt($request->upassword),
            'api_token'=> str::random(50)

        ]);
    
        
        return response()->json(['login'=> $login],201);
    

    }
    public function login(Request $request)
    {
        $login= login::where('uemail', $request->uemail)->first();
        if(!$login){
            return response()->json(['status'=>'error','message'=> 'User not found'],404);
        }
        if (Hash::check($request->upassword, $login->upassword)){
            
            return response()->json(['status'=> 'success','login'=> $login],200);
        }
    
        return response()->json(['status'=>'error','message'=> 'Invalid Credentials'],401);
}

    public function logout(Request $request)
    {
        $api_token= $request->api_token;
        $login= login::where('api_token', $api_token)->first();
        if(!$login){
            return response()->json(['status'=>'error','message'=> 'Not Logged In'],401);
        }
        $login->api_token=null;
        $login->save();
    }

    public function getlogin(){

        $alllogin = login::all();
        return response()->json(['alllogin'=>$alllogin],200);
    }

    public function deleteUsers($id){

        $login = login::find($id);
    
        if(!$login){
    
            return response()->json(['User Id'=>"User not found"],404);
    
        }
    
        $login->delete();
        return response()->json(['User'=>"User deleted successfully"],201);
    
    }
    public function index (Request $request){
        $login = login::get();
        return response()->json(['message'=>$login],201);
    }
    public function getDesigners (){
        $login = login::where('ulevel', 'Designer')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getWorkers (){
        $login = login::where('ulevel', 'Worker')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getPSupervisors (){
        $login = login::where('ulevel', 'Production Supervisor')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getPTesters (){
        $login = login::where('ulevel', 'Product Tester')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getISupervisors (){
        $login = login::where('ulevel', 'Incentive Supervisor')->get();
        return response()->json(['message'=>$login],201);
    }


    public function getworkerProfile3 (){
        $login = login::where('uemail', 'kalpani@gmail.com')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getworkerProfile2 (){
        $login = login::where('uemail', 'akila@gmail.com')->get();
        return response()->json(['message'=>$login],201);
    }
    public function getworkerProfile1 (){
        $login = login::where('uemail', 'sachini@gmail.com')->get();
        return response()->json(['message'=>$login],201);
    }
    

}
