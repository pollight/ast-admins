<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Storage;

class Recepts extends Controller
{
    public function index()
    {
         return view('recept')->with('recept' , json_encode([0])); 
    }
    protected function addRecept(Request $request)
    {
        $Req=$request->all();
        $arr1=['Time'=>date('Y-m-d H:i:s',time()),'userid'=>1,'selected'=>false];

         foreach ($Req['data'] as $key => $value) {
            if(!is_null($value['val']))
                {
                    $arr1[$value['id']]=$value['val'];
                }
                else
                {
           $arr1[$value['id']]=0;
       }
         }

         \DB::table('recipe_fir')->insert($arr1);

        return response()->json($arr1);
    }

    public function redact(){
        $recept =\DB::table('recipe_fir')->where('id', 1)->first();
     return view('recept' )->with('recept' , json_encode($recept));   
    }


    protected function update(Request $request){
        $Req=$request->all();
        $arr=['Time'=>date('Y-m-d H:i:s',time())];
         foreach ($Req['data'] as $key => $value) {
            if(!is_null($value['val'])){$arr[$value['id']]=$value['val'];}else{
           $arr[$value['id']]=0;
       }
         }
         \DB::table('recipe_fir')->where('id', 1)->update($arr);

        return response()->json($arr);
    }
}
