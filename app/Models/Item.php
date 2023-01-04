<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = ['id', 'category_id','rating', 'description', 'price', 'discount'];

    public function Category(){
        return $this->belongsTo(Category::class, 'category_id', 'id'); //foreign key of item & primary key category
    }

    public function Pictures(){
        return $this->hasMany(Picture::class, 'item_id');
    }

    public function Carts(){
        return $this->hasMany(Cart::class, 'item_id'); //foreign key of this in other's table & primary of this
    }
}