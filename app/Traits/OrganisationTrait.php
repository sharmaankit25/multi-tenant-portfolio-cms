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
            $org_id = config('settings.organisation_key');
            $item->organisation_id = $org_id ;
        });

        static::saving(function ($model) {
            $org_id = config('settings.organisation_key');
            $model->organisation_id = $org_id;
        });
    }
}