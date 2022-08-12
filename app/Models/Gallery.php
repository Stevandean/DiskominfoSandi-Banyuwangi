<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' .$search. '%');
            });
        });

        $query->when($filters['type'] ?? false, function($query, $type){ 
            return $query->where(function($query) use ($type){
                $query->where('type', 'like', $type);
            });
        });

    }

}
