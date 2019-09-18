<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    protected function index()
    {

        $routes['get_data_boards'] = route('get_data_boards');

        return view('dashboard.statistics.index', [
            'routes' => $routes,
        ]);
    }
}
