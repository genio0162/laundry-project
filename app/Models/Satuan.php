<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function laundrys(){
        return $this->hasMany(Laundry::class);
    }

}
