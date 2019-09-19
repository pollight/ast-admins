<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DataBoard;
use App\Models\Planning;

class DataBoardController extends Controller
{
    protected function getDataBoard() {

        $databoards = DataBoard::orderBy('id','desc')->limit(10)->get();

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
         $databoard['imgUpdB']= $whenUpdB;
         $databoard['imgSizeB']= $fileParamB['size'];
         $databoard['imgUpdT']= $whenUpdT;
         $databoard['imgSizeT']= $fileParamT['size'];
        return response()->json($databoard);
    }

    protected function getStatusPlanning() {

        $planning = Planning::first();
        $status = 0;
        if(!empty($planning))
            $status = $planning->status;

        return response()->json($status);
    }
}
