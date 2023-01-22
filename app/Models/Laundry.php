<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Laundry extends Model
{
    use AutoNumberTrait;
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = [ 'user', 'item', 'perfume', 'payment','pickup', 'satuan', 'kiloan'];

    public function getAutoNumberOptions()
    {
        return [
            'code' => [
                'format' => 'LR.?', // Format kode yang akan digunakan.
                'length' => 5 // Jumlah digit yang akan digunakan sebagai nomor urut
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function perfume(){
        return $this->belongsTo(Perfume::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function pickup(){
        return $this->belongsTo(Pickup::class);
    }

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }

    public function kiloan(){
        return $this->belongsTo(Kiloan::class);
    }
}
