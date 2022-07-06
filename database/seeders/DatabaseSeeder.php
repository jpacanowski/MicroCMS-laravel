<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Post;
use \App\Models\Page;
use \App\Models\Category;

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


        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => 3,
            'title' => 'Mastering Laravel',
            'slug' => 'mastering-laravel',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 1,
            'title' => 'Why I switched to OpenBSD',
            'slug' => 'why-i-switched-to-openbsd',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'published_at' => '2022-01-31 09:13:08',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 3,
            'title' => 'Git crash course',
            'slug' => 'git-crash-course',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'published_at' => '2022-02-18 10:21:02',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => 3,
            'title' => 'GTK4 application tutorial',
            'slug' => 'GTK4-application-tutorial',
            'excerpt' => 'Lorem ipsum dolor sit amet.',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'published_at' => '2022-02-22 10:32:11',
        ]);


        Page::create([
            'title' => 'About us',
            'slug' => 'about-us',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'published_at' => '2022-02-22 10:38:11',
        ]);

        Page::create([
            'title' => 'Contact us',
            'slug' => 'contact-us',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
            'published_at' => '2022-02-22 10:39:21',
        ]);
    }
}
