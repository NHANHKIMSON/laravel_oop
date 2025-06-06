<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Category::create([
        'category' => 'Standard',
        'note' => 'Standard category',
    ]);
    Category::create([
        'category' => 'Service',
        'note' => 'Service category',
    ]);
    Category::create([
        'category' => 'Combo',
        'note' => 'Combo category',
    ]);
}
}
