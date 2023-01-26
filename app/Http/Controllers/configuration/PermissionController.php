<?php

namespace App\Http\Controllers\configuration;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionController extends Controller
{
    public function index(): Factory|View|Application
    {
        // $permissions = Permission::all();
        $permissions = DB::table('users')->paginate(2);

        return view('pages.configuration.permission.index', compact('permissions'));
    }

    public function create(): Factory|View|Application
    {
        return view('pages.configuration.permission.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);

        Permission::create($validated);

        return back()->with('toast_success', Lang::get('permission.create_message'));

    }

    public function edit(Permission $permission): Factory|View|Application
    {
        return view('pages.configuration.permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission): RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);
        $permission->update($validated);

        return redirect()->route('admin.permissions.index')->with('toast_success', Lang::get('permission.update_message'));
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        $permission->delete();

        return redirect()->route('admin.permissions.index')->with('toast_success', Lang::get('permission.delete_message'));
    }

    public function selectlist(string $field): Factory|View|Application
    {
        $permissions = Permission::all();
        return view('pages.select.permission', compact('field','permissions'));

    }
}
