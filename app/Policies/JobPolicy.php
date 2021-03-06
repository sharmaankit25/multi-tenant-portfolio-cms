<?php

namespace App\Policies;

use App\User;
use App\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

        /**
     * Determine whether the user can view the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function index(User $user)
    {
        if($user->hasPermission('jobs.view')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function view(User $user, Job $job)
    {
        if($user->hasPermission('jobs.view')){
            if($user->organisation_id === $job->organisation_id){
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * Determine whether the user can create jobs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if($user->hasPermission('jobs.create')){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function update(User $user, Job $job)
    {
        if($user->hasPermission('jobs.update')){
            if($user->organisation_id === $job->organisation_id){
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the job.
     *
     * @param  \App\User  $user
     * @param  \App\Job  $job
     * @return mixed
     */
    public function delete(User $user, Job $job)
    {
        if($user->hasPermission('jobs.delete')){
            if($user->organisation_id === $job->organisation_id){
                return true;
            }
            return false;
        }
        return false;
    }
}
