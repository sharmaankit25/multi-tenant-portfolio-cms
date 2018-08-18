<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Document extends Model
{
    use OrganisationTrait;
    
    protected $fillable = [
        'name',
        'description',
        'organisation_id'
    ];
}
