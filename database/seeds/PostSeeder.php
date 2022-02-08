<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10) -> make() -> each(function($post) {

            $category = Category::inRandomOrder() -> limit(1) -> first();

            $post -> category() -> associate($category);

            $post -> save();
        });
    }
}
