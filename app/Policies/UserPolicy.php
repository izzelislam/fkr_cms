<?php

namespace App\Policies;

use App\Model\User;
// use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->role =='admin';
    }

    public function view(User $user, User $model)
    {
        //
    }

   
    public function create(User $user)
    {
        //
    }

    
    public function update(User $user, User $model)
    {
        //
    }

    
    public function delete(User $user, User $model)
    {
        //
    }

   
    public function restore(User $user, User $model)
    {
        //
    }

    
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
