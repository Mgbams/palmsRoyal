<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoyalPalmsHomePageController extends Controller
{
    use HasRoles;

    public function show()
    {
        //$role = Role::create(['name' => 'Administrateur']);
        //$role = Role::create(['name' => 'User']);
        //$role = Role::create(['name' => 'Super Admin']);
        //$permission = Permission::create(['name' => 'edit room']);
        //$permission = Permission::create(['name' => 'create room']);
        //$permission = Permission::create(['name' => 'delete room']);
        //$permission = Permission::create(['name' => 'edit user']);
        //$permission = Permission::create(['name' => 'create user']);
        //$permission = Permission::create(['name' => 'delete user']);
        //$permission = Permission::create(['name' => 'edit country']);
        //$permission = Permission::create(['name' => 'create country']);
        //$permission = Permission::create(['name' => 'delete country']);
        //$role = Role::find(3);
        //$role->givePermissionTo('edit room');
        //$role->givePermissionTo('create room');
        //$role->givePermissionTo('delete room');
        //$role->givePermissionTo('edit user');
        //$role->givePermissionTo('create user');
        //$role->givePermissionTo('delete user');
        //$role->givePermissionTo('edit country');
        //$role->givePermissionTo('create country');
        //$role->givePermissionTo('delete country');
       // dd(Auth::User());
     
        return view('welcome');
    }

    //Navigation menu TODO
    public function index()
    {
        return view('layouts.app');
    }

}
