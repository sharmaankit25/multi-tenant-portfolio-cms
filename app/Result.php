<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Result extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'session',
        'semester',
        'type',
        'standard_id',
        'organisation_id'
    ];
}
