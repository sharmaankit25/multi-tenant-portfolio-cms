<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Department extends Model
{
    use OrganisationTrait;
    
    protected $fillable = [
        'name',
        'description',
        'staff_type_id',
        'organisation_id'
    ];
}
