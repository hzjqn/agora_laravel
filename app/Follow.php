<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    protected $guarded = ['id','follower_id', 'followed_id'];
    //
    public function follower(){
        return $this->belongsToMany(User::class, 'follows', 'follower_id', 'followed_id');
    }

    public function followed(){
        return $this->belongsToMany(User::class, 'follows', 'followed_id', 'follower_id');
    }
}
