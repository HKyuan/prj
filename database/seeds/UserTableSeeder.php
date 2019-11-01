<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        // truncate => clear Table
        for ($i=0; $i <10 ; $i++) { 
            User::create([
                'number'=> $i,
                'password' => str_random(25),
                'type' => 'G',
                'name' => str_random(10)
            ]);
        }
    }
}
