<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kiloans(){
        return $this->hasMany(Kiloan::class);
    }

    public function Satuans(){
        return $this->hasMany(Satuan::class);
    }

    public function laundrys(){
        return $this->hasMany(Laundry::class);
    }


}
