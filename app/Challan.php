<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Challan extends Model
{
    use OrganisationTrait;
    
    protected $fillable = [
        'admission_id',
        'code',
        'amount',
        'status',
        'note',
        'organisation_id'
    ];

    public function admission()
    {
        return $this->belongsTo('App\Admission');
    }

}
