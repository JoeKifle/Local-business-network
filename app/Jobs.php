<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobs';
    public function lnbs(){

        return $this->belongsTo(LNBS::Class);

    }
}
