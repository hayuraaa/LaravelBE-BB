<?php

namespace App\Policies;

use App\Models\Kamus;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class KamusPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Kamus')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kamus $kamus)
    {
        if ($user->hasPermissionTo('View Kamus')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->hasPermissionTo('Create Kamus')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kamus $kamus)
    {
        if ($user->hasPermissionTo('Update Kamus')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kamus $kamus)
    {
        if ($user->hasPermissionTo('Delete Kamus')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Kamus $kamus)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Kamus $kamus)
    {
        //
    }
}
