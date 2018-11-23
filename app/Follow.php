<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
    protected $fillable = ['id','follower_id', 'followed_id'];
    //

    public function follower(){
        return $this->hasOne(User::class, 'id', 'follower_id');
    }

    public function followed(){
        return $this->hasOne(User::class, 'id', 'followed_id');
    }
}
