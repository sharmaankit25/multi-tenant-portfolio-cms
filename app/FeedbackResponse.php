<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;

class FeedbackResponse extends Model
{
    use OrganisationTrait;

    protected $fillable = [
        'feedback_id',
        'student_reg',
        'response',
        'organisation_id'
    ];

    /**
     * Returns feedback question of the response
     */

     public function feedback()
     {
        return $this->belongsTo('App\Feedback');
     }
}
