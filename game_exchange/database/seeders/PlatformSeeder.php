<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidSS
     */
    public function run()
    {
        //
        Platform::create(['name' => 'Nintendo Switch']);
        Platform::create(['name' => 'Xbox Series X']);
        Platform::create(['name' => 'Play Switch']);
    }
}
