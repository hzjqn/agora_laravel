<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Like;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'cover'];

    //
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tag(){
        return $this->belongsToMany(Category::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
