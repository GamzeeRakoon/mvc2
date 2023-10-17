<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Bundled Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Audio Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Video Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Photo Tools', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ];

        DB::table('categories')->insert($categories);
    }
}
