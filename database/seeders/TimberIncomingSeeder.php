<?php

namespace Database\Seeders;
use App\Models\TimberIncoming;
use Illuminate\Database\Seeder;

class TimberIncomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimberIncoming::factory(10)->create();
    }
}
