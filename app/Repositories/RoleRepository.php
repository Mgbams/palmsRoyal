<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleRepository
{

   
    /**
     * Get's a role by it's ID
     *
     * @param int
     * @return collection
     */

    public function getRoleById($id)
    {
        
        $role = DB::table('roles')
            ->where('roles.id', '=', $id)
            ->first();
        return $role;
    }
}
