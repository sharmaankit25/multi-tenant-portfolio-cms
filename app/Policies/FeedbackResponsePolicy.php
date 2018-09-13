<?php

namespace App\Policies;

use App\User;
use App\FeedbackResponse;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedbackResponsePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the feedbackResponse.
     *
     * @param  \App\User  $user
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return mixed
     */
    public function view(User $user, FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Determine whether the user can create feedbackResponses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the feedbackResponse.
     *
     * @param  \App\User  $user
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return mixed
     */
    public function update(User $user, FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Determine whether the user can delete the feedbackResponse.
     *
     * @param  \App\User  $user
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return mixed
     */
    public function delete(User $user, FeedbackResponse $feedbackResponse)
    {
        //
    }
}
