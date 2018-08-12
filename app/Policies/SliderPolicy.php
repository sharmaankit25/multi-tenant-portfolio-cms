<?php

namespace App\Policies;

use App\User;
use App\Slider;
use Illuminate\Auth\Access\HandlesAuthorization;

class SliderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function view(User $user, Slider $slider)
    {
        //
    }

    /**
     * Determine whether the user can create sliders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function update(User $user, Slider $slider)
    {
        //
    }

    /**
     * Determine whether the user can delete the slider.
     *
     * @param  \App\User  $user
     * @param  \App\Slider  $slider
     * @return mixed
     */
    public function delete(User $user, Slider $slider)
    {
        //
    }
}
