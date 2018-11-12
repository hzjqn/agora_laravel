<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;
use App\Follow;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class, 25)->create();
        factory(Follow::class, 10)->create();
        factory(Article::class, 10)->create();
    }
}
