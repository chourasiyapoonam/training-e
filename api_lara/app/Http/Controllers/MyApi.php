<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr;
use PhpParser\Node\Stmt\Return_;

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
        $hrm->Password=$request->password;
        $hrm->email=$request->email;
        $hrm->Role= $request->role;
        $result = $hrm->save();
        if($result){
            Return ["return"=>"data has been saved"];

        }
        else{
            Return ["return"=>"data has not been saved"];
        }



    }
    function update(Request $request){
        $hrup = Hr::find($request->id);
        $hrup->name = $request->name;
        $hrup->Password = $request->password;
        $hrup->email = $request->email;
        $hrup->Role = $request->role;
       $abc=  $hrup->save();
       if($abc){
           Return[ "return" => "data updated"];
       }else{
        Return[ "return" => "data  not updated"];
       }

    }
     function search($name){
         return Hr::where('name', $name)->get();

     } function delete($id){
         $xyz = Hr::find($id);
          $del = $xyz->delete();
          if($del){
              Return["return" => "data deleted"];


          }else{
            Return["return" => "data  not deleted"];
          }
     }

}
