<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct(User $user ,User $currentUser)
    {
        return $currentUser->id === $user->id;
    }
}
