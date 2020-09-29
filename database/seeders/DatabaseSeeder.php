<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/* use App\Models\User; */
use App\Models\user\appointment;
use App\Models\user\doctor;
use App\Models\user\occupation;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       appointment::factory(10)->create();
       doctor::factory(20)->create();
      occupation::factory(4)->create();
    }
}
