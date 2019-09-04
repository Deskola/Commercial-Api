<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Hospital::class, 10)->create();
        factory(App\Model\PersonInfo::class, 10)->create();        
       // factory(App\Model\MedicalInfo::class, 10)->create();
        
    }
}
