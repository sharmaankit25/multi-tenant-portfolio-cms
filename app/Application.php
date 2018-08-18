<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Application extends Model
{
    use OrganisationTrait;
    
    protected $fillable = [
        'name',
        'qualification',
        'experience',
        'age',
        'phone',
        'email',
        'code',
        'document_id',
        'status',
        'job_id',
        'organisation_id'
    ];

    /**
     * Returns the job for which applied
     */
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    /**
     * Returns the resume for the application
     */
    public function resume()
    {
        return $this->belongsTo('App\Document');
    }
}
