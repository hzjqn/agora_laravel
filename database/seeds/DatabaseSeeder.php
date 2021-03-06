<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(FollowSeeder::class);
        $this->call(ArticleSeeder::class);
        // $this->call(LikeSeeder::class);
        // $this->call(CommentSeeder::class);
    }
}
