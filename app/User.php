<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'first_name', 'email', 'password','gender','last_name','city'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sme_apps(){

       return $this->hasOne(SME_APPS::class);
    }

    public function LNB(){

         return $this->hasOne(LNBS::class);

    }

    public function comments(){

         return $this->hasMany(Comments::class);

    }

    public function notes(){


        return $this->hasMany(notes::class);

    }


    public function messages(){

        return $this->hasMany(messages::class);

    }



}
