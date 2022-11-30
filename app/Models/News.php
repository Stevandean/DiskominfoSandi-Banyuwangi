<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; // untuk slug

class News extends Model{
    use HasFactory, Sluggable;
    protected $guarded = ['id']; 

    public function scopeFilter($query, array $filters ){

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
            });
        });


        $query->when($filters['category'] ?? false, function($query, $category){ 
            return $query->where(function($query) use ($category){
                $query->where('category', 'like', $category);
            });
        });
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}
