<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resort extends Model
{
    protected $guarded = [];

    /**
     * Get all of the comments for the Resort
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservations::class);
    }

    public function getImageAttribute($value){
        if($value)
            return asset('storage/' . $value);
        
        return null;
    }
}
