<?php

namespace App\Policies;

use App\User;
use App\Challan;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChallanPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the challan.
     *
     * @param  \App\User  $user
     * @param  \App\Challan  $challan
     * @return mixed
     */
    public function view(User $user, Challan $challan)
    {
        //
    }

    /**
     * Determine whether the user can create challans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the challan.
     *
     * @param  \App\User  $user
     * @param  \App\Challan  $challan
     * @return mixed
     */
    public function update(User $user, Challan $challan)
    {
        //
    }

    /**
     * Determine whether the user can delete the challan.
     *
     * @param  \App\User  $user
     * @param  \App\Challan  $challan
     * @return mixed
     */
    public function delete(User $user, Challan $challan)
    {
        //
    }
}
