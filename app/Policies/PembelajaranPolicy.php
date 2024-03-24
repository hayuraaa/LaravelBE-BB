<?php

namespace App\Policies;

use App\Models\Pembelajaran;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PembelajaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Pembelajaran')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pembelajaran $pembelajaran)
    {
        if ($user->hasPermissionTo('View Pembelajaran')) {
            return true;
        }
        return false;
    }
    

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Pembelajaran')) {
            return true;
        }
        return false;
    }
    

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pembelajaran $pembelajaran)
    {
        if ($user->hasPermissionTo('Update Pembelajaran')) {
            return true;
        }
        return false;
    }
    

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pembelajaran $pembelajaran)
    {
        if ($user->hasPermissionTo('Delete Pembelajaran')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pembelajaran $pembelajaran)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pembelajaran $pembelajaran)
    {
        //
    }
}
