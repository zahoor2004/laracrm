<?php

use App\Category;

use Faker\Factory;

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
\App\Category::create([
'name'  => $faker->name,
'description' => $faker->sentence,

]);


    }
}
}
