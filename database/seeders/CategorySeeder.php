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
        $caJS->nome = 'Javascript';
        $caJS->save();

        $catVue = new Category();
        $catVue->nome = 'Vue';
        $catVue->save();

        $catPHP = new Category();
        $catPHP->nome = 'Php';
        $catPHP->save();

        $catLaravel = new Category();
        $catLaravel->nome = 'Laravel';
        $catLaravel->save();
    }
}
