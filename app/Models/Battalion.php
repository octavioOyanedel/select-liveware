<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battalion extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function regiments()
    {
        return $this->hasMany('App\Models\Regiment');
    }  

    /**
     * Get the comments for the blog post.
     */
    public function division()
    {
        return $this->belongsTo('App\Models\Division');
    }

    /**
     * scope busqueda general
     */
    public function scopeGeneral($query, $q, $campo)
    {
        if ($q) {
            return $query->where($campo, 'LIKE', "%$q%");
        }
    }     
}
