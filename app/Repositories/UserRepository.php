<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{

    /**
     * Get's a user by it's email
     *
     * @param int
     * @return collection
     */

    public function getByEmail($email)
    {
        
        $user = User::where('users.email', '=', $email)->first();

        return $user;
    }
}
