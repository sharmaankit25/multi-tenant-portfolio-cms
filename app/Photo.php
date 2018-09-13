<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Photo extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'photo',
        'description',
        'organisation_id'
    ];

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function albums()
    {
        return $this->morphedByMany('App\Album', 'photoable');
    }

        /**
     * Get all of the posts that are assigned this tag.
     */
    public function sliders()
    {
        return $this->morphedByMany('App\Slider', 'photoable');
    }
}
