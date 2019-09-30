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

        $routes['recipes_create'] = route('recipes_create');
        $routes['recipes_delete'] = route('recipes_delete');
        $routes['get_recipes_list'] = route('get_recipes_list');

        return view('dashboard.recipes.index', [
            'routes' => $routes,
        ]);
    }

    protected function getRecipesList() {
        $recipes = Recipe::all();

        return response()->json($recipes);
    }

    protected function create(Request $request) {

        $recipe = new Recipe;
        $recipe->Name = $request->input('Name');
        $recipe->gost = $request->input('gost');
        $recipe->used = false;
        $recipe->userId = auth()->user()->id;

        $recipe->save();

        return response()->json($recipe);
    }

    protected function delete($id) {

        $recipe = Recipe::find($id);
        $recipe->delete();

        return response()->json(true);
    }
}
