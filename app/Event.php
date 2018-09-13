<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Event extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description',
        'organisation_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_date','end_date'];
}
