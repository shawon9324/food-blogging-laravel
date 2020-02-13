<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'title',
        'description',
        'name',
        'price',
        'image',
        'rating',
        'category_id',
        'restaurant_id',
        'meal_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
