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
        // substr quita hora para evitar error
        return \DateTime::createFromFormat('Y-m-d', substr($value, 0, 10))->format('d-m-Y');
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

    /**
     * scope busqueda general
     */
    public static function contarRegimientosPorDivision($id)
    {
        $suma = Regiment::where('division_id', $id)->count();
        if($suma != null){
            return $suma;
        }else{
            return 0;
        }
    }         
}
