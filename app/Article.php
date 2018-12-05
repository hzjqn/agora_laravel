<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Like;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    //
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function like(){
        return $this->hasMany(Like::class);
    }
}
