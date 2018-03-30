<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name','surname','academy_degree', 'email', 'password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isRole($role)
    {
        return $this->roles()->where('name',$role)->count();

    }

    public function hasAnyRoles($roles)
    {
        if(is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }
            else{

                if($this->hasRole($roles)){
                    return true;
                }
            }return false;
        }




    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }


}
