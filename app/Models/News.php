<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['author'];

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

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
