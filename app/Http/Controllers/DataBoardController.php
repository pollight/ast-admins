<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DataBoard;
use App\Models\Planning;

use Storage;

class DataBoardController extends Controller
{
    protected function getDataBoard() {

        $databoards     = DataBoard::orderBy('id','desc')->limit(6)->get();

        
        foreach ($databoards as $databoard) {
            $databoard->time = date("H:i:s", strtotime($databoard->Time));
        }

        return response()->json($databoards);
    }

    protected function getBoardCurrent() {
        $whenUpdB   = filemtime('./storage/board/bottom.jpg');
        $fileParamB = stat('./storage/board/bottom.jpg');
         $whenUpdT   = filemtime('./storage/board/top.jpg');
        $fileParamT = stat('./storage/board/top.jpg');
        $databoard = DataBoard::orderBy('id','desc')->first();
                $recipe         = \DB::table('recipe_fir')->where('selected', true)->first();
         $databoard['imgUpdB']= $whenUpdB;
         $databoard['imgSizeB']= $fileParamB['size'];
         $databoard['imgUpdT']= $whenUpdT;
         $databoard['imgSizeT']= $fileParamT['size'];
        return response()->json(['databoard'=>$databoard,'recipe'=>$recipe]);
    }

    protected function getStatusPlanning() {

        $planning = Planning::first();
        $status = 0;
        if(!empty($planning))
            $status = $planning->status;

        return response()->json($status);
    }

    protected function getLastModified() {

        $lastModified['original']['top'] = Storage::disk('public')->lastModified('board/top.jpg');
        $lastModified['original']['bottom'] = Storage::disk('public')->lastModified('board/bottom.jpg');

        $lastModified['x_Ray']['top'] = Storage::disk('public')->lastModified('board/top-x-Ray.jpg');
        $lastModified['x_Ray']['bottom'] = Storage::disk('public')->lastModified('board/bottom-x-Ray.jpg');

        $lastModified['gray']['top'] = Storage::disk('public')->lastModified('board/top-gray.jpg');
        $lastModified['gray']['bottom'] = Storage::disk('public')->lastModified('board/bottom-gray.jpg');

        return $lastModified;
    }

}
