<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regiment extends Model
{
    use HasFactory;
	use \Znck\Eloquent\Traits\BelongsToThrough;

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

    public function getCreatedAtAttribute($value)
    {
    	//dd($value);
    	$dt = new Carbon($value);
    	//dd($dt->toDayDateTimeString());
	    return $dt->toDayDateTimeString();
    }
}
