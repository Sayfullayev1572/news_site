<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $roles=Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            //
        ]);

        $role = Role::create(['name'=>$request->name,]);
        $role->givePermissionTo($request->permission);

        return redirect()->route('admin.roles.index');
    }

    public function show(Role $role, Permission $permissions)
    {
        return view('admin.roles.show', compact('role', 'permissions'));
    }

    public function edit(Permission $permissions, Role $role)
    {
        return view('admin.roles.edit', compact('permissions','role'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
