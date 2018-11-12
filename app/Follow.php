<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    protected $guarded = ['id','follower_id', 'followed_id'];
    //
    public function doing(){
        return $this->belongsToMany(User::class, 'follower_id', 'followed_id');
    }

    public function being(){
        return $this->belongsToMany(User::class, 'followed_id', 'follower_id');
    }
}
