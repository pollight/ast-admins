<?php

use Illuminate\Database\Seeder;

use App\Models\MachineInfo;

class MachineInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = MachineInfo::first();
        if(empty($status)) {
            MachineInfo::create([
                'status_connect' => true,
            ]);
        }
    }
}
