<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notice extends Model
{
    use OrganisationTrait,SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'type',
        'organisation_id',
        'published_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at','published_at'];
}
