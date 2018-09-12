<?php
namespace App\Traits;
use Illuminate\Support\Facades\Auth;
use Unique;
trait UniqueCodeTrait {
    
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
    protected static function bootUniqueCodeTrait()
    {
        // parent::boot();
        // static::addGlobalScope(new CreatedByUserScope);

        static::created(function($item){
            $item->code = Unique::generate();
        });
        static::saving(function ($model) {
            $model->code = Unique::generate();
        });
    }
}