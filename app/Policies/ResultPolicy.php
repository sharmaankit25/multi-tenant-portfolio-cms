<?php

namespace App\Policies;

use App\User;
use App\Result;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResultPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the result.
     *
     * @param  \App\User  $user
     * @param  \App\Result  $result
     * @return mixed
     */
    public function view(User $user, Result $result)
    {
        //
    }

    /**
     * Determine whether the user can create results.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the result.
     *
     * @param  \App\User  $user
     * @param  \App\Result  $result
     * @return mixed
     */
    public function update(User $user, Result $result)
    {
        //
    }

    /**
     * Determine whether the user can delete the result.
     *
     * @param  \App\User  $user
     * @param  \App\Result  $result
     * @return mixed
     */
    public function delete(User $user, Result $result)
    {
        //
    }
}
