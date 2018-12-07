<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\User;
class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'article_id'];

    public function article(){
        return $this->belongsTo(Article::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
