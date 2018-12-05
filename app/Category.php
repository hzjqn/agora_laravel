<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
