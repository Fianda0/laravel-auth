<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->titolo = $faker->sentence(2);
            $newProject->descrizione = $faker->sentence(22);
            $newProject->immagine = "https://picsum.photos/id/" . rand(1, 500) . "/400/400";
            $newProject->category_id = rand(1, 4);
            $newProject->save();

            $newProject->lenguages()->attach([1, 2]);
        }
    }
}
