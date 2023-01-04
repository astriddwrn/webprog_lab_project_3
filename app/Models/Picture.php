<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = ['item_id', 'location'];

    public function Item(){
        return $this->belongsTo('Item', 'id');
    }

}
