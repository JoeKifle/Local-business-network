<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHOTOS extends Model
{
     protected $table='p_h_o_t_o_s';

     protected $fillable = [

         'photoname'

     ];

    public function lnbs(){

        return $this->belongsTo(LNBS::class);

    }

}
