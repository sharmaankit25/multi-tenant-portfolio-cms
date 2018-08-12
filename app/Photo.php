<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * Get all of the posts that are assigned this tag.
     */
    public function albums()
    {
        return $this->morphedByMany('App\Album', 'photoable');
    }
}
