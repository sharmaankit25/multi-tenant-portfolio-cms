<?php

namespace App\Policies;

use App\User;
use App\Staff;
use Illuminate\Auth\Access\HandlesAuthorization;

class StaffPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Staff  $staff
     * @return mixed
     */
    public function view(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can create staff.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Staff  $staff
     * @return mixed
     */
    public function update(User $user, Staff $staff)
    {
        //
    }

    /**
     * Determine whether the user can delete the staff.
     *
     * @param  \App\User  $user
     * @param  \App\Staff  $staff
     * @return mixed
     */
    public function delete(User $user, Staff $staff)
    {
        //
    }
}
