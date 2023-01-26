<?php
namespace App\Http\Controllers\Configuration;


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

class RoleController extends Controller
{
    public function index(): Factory|View|Application
    {
        //$roles = Role::all();
        $roles = DB::table('users')->paginate(2);
        $permissions = Permission::all();
        return view('pages.configuration.roles.index', compact('roles', 'permissions'));
    }

    public function create(): Factory|View|Application
    {
        return view('pages.configuration.roles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return back()->with('toast_success', Lang::get('role.create_message'));
    }

    public function edit(Role $role): Factory|View|Application
    {
        return view('pages.configuration.roles.edit', compact('role'));

    }

    public function update(Request $request, Role $role): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $role->update($validated);

        return redirect()->route('admin.roles.index')->with('toast_success', Lang::get('role.update_message'));
    }

    public function destroy(Role $role): RedirectResponse
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('toast_success', Lang::get('role.delete_message'));
    }

    public function selectlist(string $field): Factory|View|Application
    {
        $roles = Role::all();
        return view('pages.select.role', compact('field','roles'));


    }
}
