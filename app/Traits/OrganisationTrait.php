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
            $item->organisation_id = 1;
        });

        static::saving(function ($model) {
            $model->organisation_id = 1;
        });
    }
}