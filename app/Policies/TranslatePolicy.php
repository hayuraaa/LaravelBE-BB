<?php

namespace App\Policies;

use App\Models\Translate;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TranslatePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Translate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Translate $translate)
    {
        if ($user->hasPermissionTo('View Translate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Translate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Translate $translate)
    {
        if ($user->hasPermissionTo('Update Translate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Translate $translate)
    {
        if ($user->hasPermissionTo('Delete Translate')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Translate $translate)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Translate $translate)
    {
        //
    }
}
