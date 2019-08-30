<?php

use Illuminate\Database\Seeder;

use App\Models\DataBoard;

class DataBoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $databoard = DataBoard::first();
        if(empty($databoard))
            for ($i=0;$i<10;$i++) {
                DataBoard::create(
                    [
                        'Length' => rand(1,10),
                        'Width' => rand(1,10),
                        'Height' => rand(1,10),
                        'Time' => now(),
                        'Volume' => rand(1,10),
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
}
