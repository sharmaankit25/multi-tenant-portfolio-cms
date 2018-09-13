<?php

namespace App\Policies;

use App\User;
use App\Notice;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the notice.
     *
     * @param  \App\User  $user
     * @param  \App\Notice  $notice
     * @return mixed
     */
    public function view(User $user, Notice $notice)
    {
        if($user->hasPermission('notices.view')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create notices.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->hasPermission('notices.create')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the notice.
     *
     * @param  \App\User  $user
     * @param  \App\Notice  $notice
     * @return mixed
     */
    public function update(User $user, Notice $notice)
    {
        if($user->hasPermission('notices.update')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the notice.
     *
     * @param  \App\User  $user
     * @param  \App\Notice  $notice
     * @return mixed
     */
    public function delete(User $user, Notice $notice)
    {
        if($user->hasPermission('feedbacks.delete')){
            return true;
        }
        return false;
    }
}
