<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Client;
use App\Models\TimberIncoming;
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
         User::factory(1)->create();
         Client::factory(100)->create();
         TimberIncoming::factory(10)->create();
    }
}
