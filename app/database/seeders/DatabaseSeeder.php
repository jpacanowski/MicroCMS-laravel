<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Page::truncate();

        $user1 = User::create([
            'name' => 'jpacanowski',
            'email' => 'jakub.pacanowski@gmail.com',
            'password' => bcrypt('mandrake')
        ]);

        $user2 = User::create([
            'name' => 'mattonit',
            'email' => 'mattonit@gmail.com',
            'password' => bcrypt('mattonit')
        ]);


        Post::create([
            'user_id' => $user1->id,
            'title' => 'Why I switched to OpenBSD',
            'slug' => 'why-i-switched-to-openbsd',
            // 'tags' => 'openbsd',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2020-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user1->id,
            'title' => 'I started learning Hindi',
            'slug' => 'i-started-learning-hindi',
            // 'tags' => 'hindi',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2023-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'Things to do after Installing FreeBSD',
            'slug' => 'things-to-do-after-installing-freebsd',
            // 'tags' => 'freebsd',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2021-11-28 16:29:05'
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'How to display posts of a certain category',
            'slug' => 'how-to-display-posts-of-a-certain-category',
            // 'tags' => 'freebsd',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2021-11-28 16:29:05',
            'status' => 'DRAFT'
        ]);


        Page::create([
            'title' => 'About us',
            'slug' => 'about-us',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2021-11-28 16:29:05'
        ]);

        Page::create([
            'title' => 'Resources',
            'slug' => 'resources',
            'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit.</p> <p>Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non.</p> <p>Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.</p>',
            'created_at' => '2022-11-28 16:29:05'
        ]);
    }
}
