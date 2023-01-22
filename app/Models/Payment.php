<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Laundry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function laundrys(){
        return $this->hasMany(Laundry::class);
    }


}
