<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;

use App\Models\DataBoard;
use App\Models\Recipe;

class RecipeController extends Controller
{
    protected function index()
    {

        $routes['get_data_boards'] = route('get_data_boards');

        $recipes = null;

        return view('dashboard.recipes.index', [
            'recipes' => $recipes,
            'routes' => $routes,
        ]);
    }
}
