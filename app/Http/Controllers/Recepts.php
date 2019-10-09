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
        $arr1=['Time'=>date('Y-m-d H:i:s',time()),'userid'=>1,'selected'=>false,'Gost'=>$Req['gost'],'Name'=>$Req['Name']];
        if(isset($Req['data'])){
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
     }

         \DB::table('recipe_fir')->insert($arr1);

        return response()->json($arr1);
    }

    public function redact(Request $request){
        $Req=$request->all();
        $recept =\DB::table('recipe_fir')->where('Name', $Req['Name'])->first();
     return json_encode($recept);   
    }


    protected function update(Request $request){
        $Req=$request->all();
        $arr=['Time'=>date('Y-m-d H:i:s',time())];
         foreach ($Req['data'] as $key => $value) {
            if(!is_null($value['val'])){$arr[$value['id']]=$value['val'];}else{
           $arr[$value['id']]=0;
       }
         }
         \DB::table('recipe_fir')->where('Name', $Req['name'])->update($arr);

        return response()->json($arr);
    }
        protected function checRecept(Request $request){
        $Req=$request->all();
        $arr=['selected'=>true];
        \DB::table('recipe_fir')->update(['selected'=>false]);
         \DB::table('recipe_fir')->where('Name', $Req['Name'])->update($arr);

        return response()->json($arr);
    }

    protected function deleteRecept(Request $request)
    {
        $Req=$request->all();
        \DB::table('recipe_fir')->where('id',$Req['id'])->delete();
    }
}
