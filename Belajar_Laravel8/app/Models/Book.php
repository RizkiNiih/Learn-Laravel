<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'title', 'author', 'price', 'description'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
