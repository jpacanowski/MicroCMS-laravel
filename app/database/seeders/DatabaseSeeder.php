<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::truncate();

        Post::create([
            'user_id' => 1,
            'status' => 'PUBLISHED',
            'title' => 'Why I switched to OpenBSD',
            'slug' => 'why-i-switched-to-openbsd',
            'tags' => 'openbsd',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non. Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.'
        ]);

        Post::create([
            'user_id' => 1,
            'status' => 'PUBLISHED',
            'title' => 'I started learning Hindi',
            'slug' => 'i-started-learning-hindi',
            'tags' => 'hindi',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non. Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.'
        ]);

        Post::create([
            'user_id' => 1,
            'status' => 'PUBLISHED',
            'title' => 'Things to do after Installing FreeBSD',
            'slug' => 'things-to-do-after-installing-freebsd',
            'tags' => 'freebsd',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Volutpat blandit aliquam etiam erat. Nulla porttitor massa id neque aliquam vestibulum morbi blandit. Nibh sit amet commodo nulla facilisi nullam vehicula ipsum a. Sit amet consectetur adipiscing elit. Pharetra sit amet aliquam id diam maecenas ultricies. Velit scelerisque in dictum non. Diam quis enim lobortis scelerisque fermentum. Vitae et leo duis ut. Massa sed elementum tempus egestas sed sed risus. Non blandit massa enim nec. Id aliquet lectus proin nibh nisl. Consequat mauris nunc congue nisi. Vulputate eu scelerisque felis imperdiet proin fermentum leo. Est sit amet facilisis magna.'
        ]);
    }
}
