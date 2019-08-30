<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = User::where('login','ast')->first();
        if(empty($admins)) {
            User::create([
                'name' => 'IVC',
                'login' => 'ast',
                'password' => bcrypt('z1x2c3v4b5'),
            ]);
        }
    }
}
