<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class Feedback extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'question',
        'description',
        'organisation_id'
    ];

    /**
     * Returns responses on the given feedback
     */

    public function responses()
    {
        return $this->hasMany('App\FeedbackResponse');
    }
}
