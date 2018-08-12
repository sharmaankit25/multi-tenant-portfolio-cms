<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achiever extends Model
{
    /**
     * Get all of the photos for the album.
     */
    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }
}
