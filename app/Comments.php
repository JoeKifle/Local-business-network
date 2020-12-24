<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
      protected $table = 'comments';

    public function lnbs(){

        return $this->belongsTo(LNBS::Class);

    }

    public function users(){

         return $this->belongsTo(User::class);

    }

}
