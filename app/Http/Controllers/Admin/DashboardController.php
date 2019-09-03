<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

use App\Models\DataBoard;

class DashboardController extends Controller
{
    public function start()
    {
        $pictures['original']['top'] = Storage::disk('public')->url('board/top.jpg');
        $pictures['original']['bottom'] = Storage::disk('public')->url('board/bottom.jpg');

        $pictures['x-Ray']['top'] = Storage::disk('public')->url('board/top-x-Ray.jpg');
        $pictures['x-Ray']['bottom'] = Storage::disk('public')->url('board/bottom-x-Ray.jpg');

        $pictures['gray']['top'] = Storage::disk('public')->url('board/top-gray.jpg');
        $pictures['gray']['bottom'] = Storage::disk('public')->url('board/bottom-gray.jpg');

        $routes['get_data_boards'] = route('get_data_boards');
        $routes['get_board_current'] = route('get_board_current');
        $routes['get_status_planning'] = route('get_status_planning');

        return view('dashboard.start', [
            'pictures' => $pictures,
            'routes' => $routes,
        ]);
    }
}
