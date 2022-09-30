<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axie extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function scopeSearch($query, $terms)
    {

     collect(explode(" ", $terms))
        ->filter()
        ->each(function ($term)use ($query) {
            $term= '%' .$term . '%';

            $query->where('axie_name', 'like', $term)
                ->orWhere('axie_type', 'like', $term);  
        });
    }
}
