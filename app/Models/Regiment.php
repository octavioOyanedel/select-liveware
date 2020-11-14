<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function battalion()
    {
        return $this->belongsTo('App\Models\Battalion');
    }

    /**
     * Get the comments for the blog post.
     */
    public function division()
    {
        return $this->belongsToThrough('App\Models\Division','App\Models\Battalion');
    }    
}
