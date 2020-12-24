<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rates extends Model
{

    public function lnbs(){

        return $this->belongsTo(LNBS::Class);

    }

}
