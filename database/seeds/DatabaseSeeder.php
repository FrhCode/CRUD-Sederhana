<?php

use App\student;
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
        factory(student::class, 4)->create();
        // $this->call(UserSeeder::class);
    }
}
