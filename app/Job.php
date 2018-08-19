<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\OrganisationTrait;
use App\Traits\UniqueCodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    use OrganisationTrait,UniqueCodeTrait,SoftDeletes;

    protected $fillable = [
        'title',
        'post',
        'qualification',
        'vacancy',
        'vacant',
        'description',
        'salary',
        'code',
        'organisation_id',
        'published_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at','published_at'];
}
