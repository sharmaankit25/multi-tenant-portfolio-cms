<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Admission extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'name',
        'age',
        'birthdate',
        'session',
        'type',
        'admission_date',
        'fathers_name',
        'mothers_name',
        'city',
        'address',
        'phone',
        'email',
        'previous_school',
        'standard_id',
        'document_id',
        'code',
        'status',
        'note'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['admission_date','birthdate'];

    /**
     * Returns standard of the admission
     */
    protected function standard()
    {
        return $this->belongsTo('App\Standard');
    }

    /**
     * Returns documents of the admission
     */

     public function documents()
     {
        return $this->hasOne('App\Document');
     }
}
