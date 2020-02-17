<?php

namespace App\Http\Controllers;
use App\incentivehand;
use Illuminate\Http\Request;
use DB;
use Excel;

class IncentivehandController extends Controller
{
    //function index(){
    //    $data = DB::table('incentivehands') -> orderBy('Pressno','DESC')->get();

    //}


    public function getproductiondata(){

        $allincentivehands = incentivehands::all();
        return response()->json(['allincentivehands'=>$allincentivehands],200);
    }




    function insertexcel(Request $request){
        $this->validate($request,[
            'select_file'  => 'required|mimes:xls,xlsx'
        ]); 

        $path =$request->file('select_file')->getRealPath();
        $data = Excel::load($path)->get();

        if($data->count() > 0){
            foreach($data->toArray() as $key => $value){

                foreach($value as $row){
                    $insert_data[] = array(

                        'Pressno'     => $row['Pressno'],
                        'Partno'     => $row['Partno'],
                        'Item'     => $row['Item'],
                        'OP'     => $row['OP'],
                        'DL'     => $row['DL'],
                        'Material'     => $row['Material'],
                        '6_2target'     => $row['6_2target'],
                        '2_10target'     => $row['2_10target'],
                        '10_6target'     => $row['10_6target'],
                        'TtargetPrecentage'     => $row['TtargetPrecentage'],
                        'Machine_run_factor'     => $row['Machine_run_factor'],
                        'Actual_run_factor'     => $row['Actual_run_factor'],
                        '6_2Empl'     => $row['6_2Empl'],
                        '2_10Empl'     => $row['2_10Empl'],
                        '10_6Empl'     => $row['10_6Empl'],
                        '6_2Ltime'     => $row['6_2Ltime'],
                        '2_10Ltime'     => $row['2_10Ltime'],
                        '10_6Ltime'     => $row['10_6Ltime'],
                        '6_2GoTotal'     => $row['6_2GoTotal'],
                        '6_2Reject'     => $row['6_2Reject'],
                        '6_2TO'     => $row['6_2TO'],
                        '2_10TO'     => $row['2_10TO'],
                        '10_6TO'     => $row['10_6TO'],
                        'RejectTotal'     => $row['RejectTotal'],
                        'GoodTotal'     => $row['GoodTotal'],
                        '6_2actual_time'     => $row['6_2actual_time'],
                        '2_10actual_time'     => $row['2_10actual_time'],
                        '10_6actual_time'     => $row['10_6actual_time'],
                        '6_2new_target'     => $row['6_2new_target'],
                        '2_10new_target'     => $row['2_10new_target'],
                        '10_6new_target'     => $row['10_6new_target'],
                    


                    );
                }
            }
            
            if(!empty($insert_data)){
                DB::table('incentivehands')->insert($insert_data);
            }
        }
    }

}
