<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;
class Comment extends Model
{
    public function article(){
        return $this->belongsTo(Article::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
