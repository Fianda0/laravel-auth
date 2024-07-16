<?php

namespace Database\Seeders;

use App\Models\Lenguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LenguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $italiano = new Lenguage();
        $italiano->nome = 'Italiano';
        $italiano->save();

        $inglese = new Lenguage();
        $inglese->nome = 'inglese';
        $inglese->save();

        $francese = new Lenguage();
        $francese->nome = 'francese';
        $francese->save();
    }
}
