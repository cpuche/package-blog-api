<?php

namespace Cpuche\Blog\Api\Database\seeders;

use Cpuche\Blog\Api\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(10)->create();
    }
}
