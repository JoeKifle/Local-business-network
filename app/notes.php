<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    public function user(){


        return $this->belongsTo(User::class);

    }

}
