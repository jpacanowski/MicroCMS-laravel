<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::truncate();
        Post::truncate();

        $user = User::create([
            'name' => 'falcon030',
            'email' => 'falcon030@mail.com',
            'password' => bcrypt('qwerty1234'),
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 1,
            'title' => 'Mastering Laravel',
            'slug' => 'mastering-laravel',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet.',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 1,
            'title' => 'Why I switched to OpenBSD',
            'slug' => 'why-i-switched-to-openbsd',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet.',
            'published_at' => '2022-01-31 09:13:08',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 1,
            'title' => 'Git crash course',
            'slug' => 'git-crash-course',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet.',
            'published_at' => '2022-02-18 10:21:02',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 1,
            'title' => 'GTK4 application tutorial',
            'slug' => 'GTK4-application-tutorial',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet.',
            'published_at' => '2022-02-22 10:32:11',
        ]);
    }
}
