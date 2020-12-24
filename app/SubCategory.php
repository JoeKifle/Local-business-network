<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $fillable = [
      'sub_cat', 'category_id',
  ];
    public function category(){

       return $this->belongsTo(Catagories::Class);

    }
}
