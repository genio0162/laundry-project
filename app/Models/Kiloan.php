<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laundry;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kiloan extends Model
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
