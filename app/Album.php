<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use OrganisationTrait,SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'organisation_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    /**
     * Get all of the photos for the album.
     */
    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }
}
