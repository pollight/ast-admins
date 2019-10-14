<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

use App\Models\DataBoard;

class DashboardController extends Controller
{
    protected function start()
    {
        $pictures['original']['top'] = Storage::disk('public')->url('board/top.jpg');
        $pictures['original']['bottom'] = Storage::disk('public')->url('board/bottom.jpg');

        $pictures['x_Ray']['top'] = Storage::disk('public')->url('board/top-x-Ray.jpg');
        $pictures['x_Ray']['bottom'] = Storage::disk('public')->url('board/bottom-x-Ray.jpg');

        $pictures['gray']['top'] = Storage::disk('public')->url('board/top-gray.jpg');
        $pictures['gray']['bottom'] = Storage::disk('public')->url('board/bottom-gray.jpg');

        $routes['get_data_boards'] = route('get_data_boards');
        $routes['get_board_current'] = route('get_board_current');
        $routes['get_status_planning'] = route('get_status_planning');
        $routes['get_last_modified'] = route('get_last_modified');

        return view('dashboard.start', [
            'pictures' => $pictures,
            'routes' => $routes,
        ]);

    }


    protected function diagnostics()
    {
                $routes['get_data_boards'] = route('get_data_boards');
        $routes['get_board_current'] = route('get_board_current');
        $routes['get_status_planning'] = route('get_status_planning');
        $routes['get_last_modified'] = route('get_last_modified');
         return view('dashboard.diagnostics', [
            'routes' => $routes,
        ]);        
    }

    protected function neural_network()
    {
        //return view('dashboard.neural_network');  
        //View::first('dashboard.diagnostics')         
    }
    protected function download()
    {
        return response()->download('storage/my.sh');
    }
}
