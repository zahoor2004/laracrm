<?php

use App\Category;
use Faker\Factory;
use Faker\Provider\Image;
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
 $faker = Factory::create();
 for($i=1; $i<10; $i++){
Category::create([
'name'  => $faker->name,
'description' => $faker->sentence,
'photo' =>$faker->image('public/photos',400,300, null, false),
]);


    }
}
}
