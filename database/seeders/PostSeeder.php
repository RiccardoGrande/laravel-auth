<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->slug = Str::slug($post->title, '-'); // 👈  Use me to generate a slug
            $post->content = $faker->paragraphs(asText:true);
            $post->cover_image = $faker->imageUrl(category:'Posts', format:'jpg');
            $post->save();
        }
    }
}
