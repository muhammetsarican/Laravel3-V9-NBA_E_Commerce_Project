<?php

namespace App\Models;

use App\Http\Controllers\ShopcartController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function shopcart()
    {
        return $this->hasMany(Shopcart::class);
    }
}
