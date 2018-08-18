<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Achiever extends Model
{
    use OrganisationTrait;
    
    /**
     * Get all of the photos for the album.
     */
    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }
}
