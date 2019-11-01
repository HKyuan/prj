<?php

use App\Treatment;
use Illuminate\Database\Seeder;


class TreatmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('treatments')->truncate();
    
       for ($i=0; $i <10 ; $i++) { 
           Treatment::create([
               'name' =>str_random(255),
           ]);
       }

    }
}
