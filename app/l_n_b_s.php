<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class l_n_b_s extends Model
{
    protected $fillable = [
        'LNB_name', 'lnb_quote','profile_pic', 'wallpaper','users_id', 'category'

    ];

    public function comments(){

        return $this->HasMany(Comments::class);
    }

    public function photos(){

        return $this->HasMany(PHOTOS::class);
    }

    public function User(){

        return $this->hasOne(User::class);

    }

    public function jobs(){

        return $this->HasMany(Jobs::class);
    }
    public function rates(){

        return $this->hasMany(rates::class);
    }


}
