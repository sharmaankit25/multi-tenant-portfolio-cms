<?php
namespace App\Traits;
use App\Scopes\OrganisationScope;

trait OrganisationTrait {
    
    // public static function bootOrganisationTrait()
    // {
    //     static::created(function($item){
    //         // Index the item
    //     });
    // }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function bootOrganisationTrait()
    {
        // parent::boot();

        static::addGlobalScope(new OrganisationScope);

        static::created(function($item){
            // Index the item
            $organisation = \App\Organisation::where('token',config('settings.organisation_key'))->first();
            $item->organisation_id = $organisation->id;
        });

        static::saving(function ($model) {
            $organisation = \App\Organisation::where('token',config('settings.organisation_key'))->first();
            $model->organisation_id = $organisation->id;
        });
    }
}