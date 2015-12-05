<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(App\Subbreddit::class, 25)->create();

        factory(App\User::class, 50)->create()->each(function($user) {
            $user->posts()->save(factory(App\Post::class)->make())
                ->comments()->save(factory(App\Comment::class)->make(['user_id' => $user['id']]))
                ->comments()->save(factory(App\Comment::class)->make(['user_id' => $user['id']]));
            $user->subbreddits()->save(App\Subbreddit::find(rand(1, 25)));
        });

        Model::reguard();
    }
}
