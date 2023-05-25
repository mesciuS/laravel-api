<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i ++) {
            $newproject = new Project();
            $newproject->title = $faker->sentence(6, true);
            $newproject->slug = Str::slug($newproject->title, '-');
            $newproject->text = $faker->text(300);
            $newproject->type_id = rand(1,3);
    
            $newproject->save();
        }
    }
}
