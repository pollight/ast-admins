<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

class DashboardController extends Controller
{
    public function start()
    {
        $pictures['original'][1] = Storage::disk('public')->url('pictures/original/1/1.jpg');
        $pictures['original'][2] = Storage::disk('public')->url('pictures/original/2/2.jpg');

        $pictures['xray'][1] = Storage::disk('public')->url('pictures/original/1/1.jpg');
        $pictures['xray'][2] = Storage::disk('public')->url('pictures/original/2/2.jpg');

        $pictures['grey'][1] = Storage::disk('public')->url('pictures/original/1/1.jpg');
        $pictures['grey'][2] = Storage::disk('public')->url('pictures/original/2/2.jpg');


        return view('dashboard.start', [
            'pictures' => $pictures,
        ]);
    }
}
