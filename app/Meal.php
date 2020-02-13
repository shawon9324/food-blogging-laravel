<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'type',
    'availablity_time'
      ];
      public function food()
      {
          return $this->hasMany(Food::class);
      }
    
}
