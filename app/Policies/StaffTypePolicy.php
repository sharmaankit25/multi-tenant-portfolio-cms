<?php

namespace App\Policies;

use App\User;
use App\StaffType;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the staffType.
     *
     * @param  \App\User  $user
     * @param  \App\StaffType  $staffType
     * @return mixed
     */
    public function view(User $user, StaffType $staffType)
    {
        //
    }

    /**
     * Determine whether the user can create staffTypes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the staffType.
     *
     * @param  \App\User  $user
     * @param  \App\StaffType  $staffType
     * @return mixed
     */
    public function update(User $user, StaffType $staffType)
    {
        //
    }

    /**
     * Determine whether the user can delete the staffType.
     *
     * @param  \App\User  $user
     * @param  \App\StaffType  $staffType
     * @return mixed
     */
    public function delete(User $user, StaffType $staffType)
    {
        //
    }
}
