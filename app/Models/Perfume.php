<?php

namespace App\Models;

use App\Models\Laundry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perfume extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function laundrys(){
        return $this->hasMany(Laundry::class);
    }


}
