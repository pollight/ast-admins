<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\DataBoard;

use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class CreateNewBoardCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'board:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new board';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $result = DataBoard::create(
            [
                'Length' => rand(1,10),
                'Width' => rand(10,50)/100,
                'Height' => rand(10,50)/100,
                'Time' => now(),
                'Volume' => rand(0, 100),
                'Type' => 'сосна',
                'Sort' => 'первый',
                'Suchki' => rand(0,10),
                'Treschiny' => rand(0,10),
                'Svievatist' => rand(0,10),
                'Prorost' => rand(0,10),
                'Zabolon' => rand(0,10),
                'Plesen' => rand(0,10),
                'Gnil' => rand(0,10),
                'Sineva' => rand(0,10),
                'Obzol' => rand(0,10),
                'Mech' => rand(0,10),
                'Piatna' => rand(0,10),
            ]
        );


        $path = __DIR__ . "/../../../resources/image/" . $result->id%2 . ".jpg";

        //original
        $img = Image::make($path)->encode('jpg', 95);
        Storage::disk('public')->put('board/top.jpg',$img);

        $img = Image::make($path)->flip('v')->encode('jpg', 95);
        Storage::disk('public')->put('board/bottom.jpg',$img);

        //x-Ray
        $img = Image::make($path)->colorize(30, 0, 0)->encode('jpg', 95);
        Storage::disk('public')->put('board/top-x-Ray.jpg',$img);

        $img = Image::make($path)->flip('v')->colorize(30, 0, 0)->encode('jpg', 95);
        Storage::disk('public')->put('board/bottom-x-Ray.jpg',$img);

        //gray
        $img = Image::make($path)->greyscale()->encode('jpg', 95);
        Storage::disk('public')->put('board/top-gray.jpg',$img);

        $img = Image::make($path)->flip('v')->greyscale()->encode('jpg', 95);
        Storage::disk('public')->put('board/bottom-gray.jpg',$img);

    }
}
