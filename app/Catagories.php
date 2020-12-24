<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagories extends Model
{
  protected $fillable = [
      'category'
  ];

   public function Subcategory(){

   return $this->HasMany(SubCategory::class);


   }
}
