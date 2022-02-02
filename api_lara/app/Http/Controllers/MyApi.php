<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr;

class MyApi extends Controller
{
    //
    function list(){
        return Hr::all();

    }
    function show($id){
        return Hr::find($id);

    }
    function add(Request $request){

        $hrm = new Hr;
        $hrm->name=$request->name;
        $hrm->Password=$request->Password;
        $hrm->email=$request->email;
        $result = $hrm->save();
        if($result){
            Return ["return"=>"data has been saved"];

        }
        else{
            Return ["return"=>"data has not been saved"];
        }



    }

}
