<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) { 
            $newPost = new Post();
    
            $newPost->title = $faker->sentence();
            $newPost->body = $faker->text();
            $newPost->author = $faker->name();
    
            $newPost->save();
        }
    }
}
