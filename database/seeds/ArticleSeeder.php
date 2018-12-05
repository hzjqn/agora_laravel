<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;
use App\Follow;
use App\Category;

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
        $categories = collect([
            'Politics',
            'Genre',
            'Sports',
            'Education',
            'Technology',
            'Design',
            'Gastronomy',
            'Medicine'
        ]);
    
        foreach ($categories as $key => $category){
            Category::create(['name' => $category]);
        }

        factory(User::class, 25)->create();
        factory(Follow::class, 10)->create();
        factory(Article::class, 10)->create();
    }
}
