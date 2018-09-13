<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Achiever extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'name',
        'description',
        'standard_id',
        'event_id',
        'position',
    ];
    
    /**
     * Get all of the photos for the album.
     */
    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }

    /**
     * Get standard of the achiever
     */
    public function standard()
    {
        return $this->belongsTo('App\Standard');
    }

    /**
     * Get event of the achiever
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
