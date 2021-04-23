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
'description' => $faker->paragraph,
'photo' =>$faker->image('public/storage/photos',320,240, null, false),
]);


    }
}
}
