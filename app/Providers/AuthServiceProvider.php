<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Job' => 'App\Policies\JobPolicy',
        'App\Admission' => 'App\Policies\AdmissionPolicy',
        'App\Album' => 'App\Policies\AlbumPolicy',
        'App\Page' => 'App\Policies\PagePolicy',
        'App\Event' => 'App\Policies\EventPolicy',
        'App\Achiever' => 'App\Policies\AchieverPolicy',
        'App\Feedback' => 'App\Policies\FeedbackPolicy',
        'App\Notice' => 'App\Policies\NoticePolicy',
        'App\Organisation' => 'App\Policies\OrganisationPolicy',
        'App\Slider' => 'App\Policies\SliderPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
