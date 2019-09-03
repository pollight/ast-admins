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

        $databoard = DataBoard::orderBy('id','desc')->first();

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
