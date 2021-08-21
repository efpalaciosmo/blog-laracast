<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name'=>'Efrain'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
//        User::truncate();
//        Category::truncate();
//        Post::truncate();
//
//        User::factory()->create();
//
//        $person = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt' => '<p> Lorem ipsum doral sit amet </p>',
//            'body' => '<p>Lorem ipsum doral sit amet Lorem ipsum doral sit amet Lorem ipsum doral sit amet</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-second-post',
//            'excerpt' => '<p>Lorem ipsum doral sit amet</p>',
//            'body' => '<p>Lorem ipsum doral sit amet Lorem ipsum doral sit amet Lorem ipsum doral sit amet<\p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $person->id,
//            'title' => 'My Person Post',
//            'slug' => 'my-third-post',
//            'excerpt' => '<p>Lorem ipsum doral sit amet</p>',
//            'body' => '<p>Lorem ipsum doral sit amet Lorem ipsum doral sit amet Lorem ipsum doral sit amet</p>'
//        ]);

    }
}
