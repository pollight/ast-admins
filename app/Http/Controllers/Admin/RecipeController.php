<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer;
use Storage;

use App\Models\DataBoard;
use App\Models\Recipe;
use Illuminate\Support\Facades\Hash;




use ElasticEmailClient\ElasticClient as Client;
use ElasticEmailClient\ApiConfiguration as Configuration;

class RecipeController extends Controller
{
	

    protected function index()
    {

//$e=print_r(Hash::make('z1x2c3v4b5'));//\DB::table('users')->insert(['name'=>'ast','email'=>'thisis@myemail.com','password'=>Hash::make('z1x2c3v4b5')]);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $routes['recipes_create'] = route('recipes_create');
        $routes['recipes_delete'] = route('recipes_delete');
        $routes['get_recipes_list'] = route('get_recipes_list');

        return view('dashboard.recipes.index', [
            'routes' => $routes,
        ]);
    }

    protected function getRecipesList() {
        //$recipes = Recipe::all();
        $recipes = \DB::table('recipe_fir')->orderBy('id', 'asc')->get();
        //print_r($recipes);
        //return response()->json($recipes);
        return json_encode($recipes);
    }

    protected function create(Request $request) {

        $recipe = new Recipe;
        $recipe->Name = $request->input('Name');
        $recipe->gost = $request->input('gost');
        $recipe->used = false;
       // $recipe->userId = auth()->user()->id;
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
