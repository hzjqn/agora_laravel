<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}
