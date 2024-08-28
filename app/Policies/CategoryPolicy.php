<?php

namespace App\Policies;

use App\Models\User;
use App\Models\category;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, category $category): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): Response
    {
        $roles = $user->roles()->get();
        foreach ($roles as $role) {
            if ($role->title === 'admin')
                return Response::allow();
        }
        return Response::deny('You have not permission for create new post');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user): Response
    {
        $roles = $user->roles()->get();
        foreach ($roles as $role) {
            if ($role->title === 'admin')
                return Response::allow();
        }
        return Response::deny('You have not permission for update post');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): Response
    {
        $roles = $user->roles()->get();
        foreach ($roles as $role) {
            if ($role->title === 'admin')
                return Response::allow();
        }
        return Response::deny('You have not permission for delete post');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, category $category): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, category $category): bool
    {
        //
    }
}
