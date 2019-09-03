<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\DataBoard;

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
        DataBoard::create(
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
    }
}
