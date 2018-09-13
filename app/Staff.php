<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use OrganisationTrait,SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'organisation_id',
        'deleted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at','published_at'];
}
