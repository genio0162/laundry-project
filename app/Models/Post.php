<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){
    $query->when($filters['search'] ?? false, function($query , $search){
        return $query->where('title', 'like', '%'. $search .'%')
                     ->orWhere('body', 'like', '%' . $search .'%');
    });
    $query->when($filters['user'] ?? false, function($query , $user){
        return $query->whereHas('user', function($query) use ($user){
            $query->where('username', $user);
        });
    });
    $query->when($filters['category'] ?? false, function($query , $category){
        return $query->whereHas('category', function($query) use ($category){
            $query->where('slug', $category);
        });
    });
    }
}
