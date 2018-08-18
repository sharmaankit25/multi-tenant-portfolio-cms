<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Page extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'organisation_id'
    ];

    /**
     * Get all of the photos for the album.
     */
    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }
}
