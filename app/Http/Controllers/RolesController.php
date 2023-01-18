<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create()
    {
        $role = new Role();
        $role ->name = 'Client';
        $role->save();

        Role::create([
            'name' => 'manager',
        ]);

        return response()->json('true');
    }

    public function index()
    {
        //return response()->json(Role::get());
        //return Role::whereNotNull('created_at')->orWhere('id', '>', 1)->toSql();
        return Role::where('created_at','=', null)->get();
    }
}
