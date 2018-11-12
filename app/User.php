<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Comment;
use App\Like;
use App\Follow;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const ACTIVE = 1;
    const INACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'token', 'active', 'profile_photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($role) {
        switch ($role) {
            case 'admin' || '9':
                if($this->role == 9){
                    return true;
                }
                break;

            case 'mod' || '8':    
                if($this->role == 8 || $this->role == 9){
                    return true;
                }
                break;

            case 'user' || '0':    
                if($this->role == 0 || $this->role == 8 || $this->role == 9){
                    return true;
                }
                break;

            default: 
                return false;
                break;
        }
    }

    public function articles() {
        return $this->hasMany(Article::class, 'user_id', 'id');
    }

    /**
     * Returns all the users that the user follows
     */
    public function following(){
        return $this->hasMany(Follow::class);
    }

    public function followed(){
        return $this->belongsToMany(Follow::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
