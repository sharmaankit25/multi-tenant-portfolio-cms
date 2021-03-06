<?php

namespace App\Policies;

use App\User;
use App\Admission;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdmissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the admission.
     *
     * @param  \App\User  $user
     * @param  \App\Admission  $admission
     * @return mixed
     */
    public function view(User $user, Admission $admission)
    {
        if($user->hasPermission('admissions.view')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create admissions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->hasPermission('admissions.create')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the admission.
     *
     * @param  \App\User  $user
     * @param  \App\Admission  $admission
     * @return mixed
     */
    public function update(User $user, Admission $admission)
    {
        if($user->hasPermission('admissions.update')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the admission.
     *
     * @param  \App\User  $user
     * @param  \App\Admission  $admission
     * @return mixed
     */
    public function delete(User $user, Admission $admission)
    {
        if($user->hasPermission('admissions.update')){
            return true;
        }
        return false;
    }
}
