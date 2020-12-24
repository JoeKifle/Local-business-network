<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SME_APPS extends Model
{
    protected $table = 's_m_e__a_p_p_s';

    public function User(){

         return $this->belongsTo(User::class);

    }
}
