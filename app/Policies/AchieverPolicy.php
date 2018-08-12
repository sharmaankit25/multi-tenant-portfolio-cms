<?php

namespace App\Policies;

use App\User;
use App\Achiever;
use Illuminate\Auth\Access\HandlesAuthorization;

class AchieverPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the achiever.
     *
     * @param  \App\User  $user
     * @param  \App\Achiever  $achiever
     * @return mixed
     */
    public function view(User $user, Achiever $achiever)
    {
        //
    }

    /**
     * Determine whether the user can create achievers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the achiever.
     *
     * @param  \App\User  $user
     * @param  \App\Achiever  $achiever
     * @return mixed
     */
    public function update(User $user, Achiever $achiever)
    {
        //
    }

    /**
     * Determine whether the user can delete the achiever.
     *
     * @param  \App\User  $user
     * @param  \App\Achiever  $achiever
     * @return mixed
     */
    public function delete(User $user, Achiever $achiever)
    {
        //
    }
}
