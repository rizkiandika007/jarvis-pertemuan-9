<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(TaskSeeder::class);
        // Panggil CategorySeeder jika diperlukan
        // $this->call(CategorySeeder::class);
    }
}