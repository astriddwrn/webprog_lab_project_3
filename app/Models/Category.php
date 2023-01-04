<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = ['id'];

    public function Items(){
        return $this->hasMany(Item::class, 'category_id', 'id'); //foreign key of item & primary of category
    }
}
