<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function battalions()
    {
        return $this->hasMany('App\Models\Battalion');
    }

    /**
     * Get all of the posts for the country.
     */
    public function regiments()
    {
        return $this->hasManyThrough('App\Models\Regiment', 'App\Models\Battalion');
    }  
}
