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
    public function run(): void
    {
        $caJS = new Category();
        $caJS->name = 'Javascript';
        $caJS->save();

        $catVue = new Category();
        $catVue->name = 'Vue';
        $catVue->save();

        $catPHP = new Category();
        $catPHP->name = 'Php';
        $catPHP->save();

        $catLaravel = new Category();
        $catLaravel->name = 'Laravel';
        $catLaravel->save();
    }
}
