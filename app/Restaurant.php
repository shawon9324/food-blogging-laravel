<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'address'
      ];
      public function food()
      {
          return $this->hasMany(Food::class);
      }
}
