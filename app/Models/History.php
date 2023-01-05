<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = ['user_id', 'item_id', 'size', 'quantity'];

    public function User(){
        return $this->belongsTo('User', 'id');
    }

    public function Item(){
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    // public function Item()
    // {
    //     return $this->hasOne(Item::class, 'item_id', 'id');
    // }
}
