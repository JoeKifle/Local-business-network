<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $table = "messages";


    public function users(){

        return $this->belongsTo(User::class);

    }

    public function messagesreplay(){

        return $this->hasMany(messagereplay::class);

    }

}
