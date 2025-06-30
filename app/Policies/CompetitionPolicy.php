<?php

namespace App\Policies;

use App\Models\Competition;
use App\Models\User;

class CompetitionPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;

    public function view(User $user, Competition $competition) 
    {
        return true;
    }

    public function create(User $user) 
    {
        return true;
    }

    public function update(User $user, Competition $competition) 
    {
        return $user->id == $competition->uid; 
    }

    public function delete(User $user, Competition $competition) 
    {
    return $user->isAdmin() || $user->id == $competition->uid;
    }
}
