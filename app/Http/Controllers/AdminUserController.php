<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;

use App\Models\User;



class AdminUserController extends Controller
{
    /**
     * Muestra la lista de usuarios administradores.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $adminUsers = AdminUser::all();

        return view('admin_users.index', compact('adminUsers'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario administrador.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin_users.create');
    }



    /**
     * Almacena un nuevo usuario administrador en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_users,email',
            'password' => 'required|string|min:8',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        AdminUser::create($validatedData);

        return redirect()->route('admin_users.index')
            ->with('success', 'Usuario administrador creado exitosamente.');
    }

    /**
     * Muestra los detalles de un usuario administrador específico.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\View\View
     */
    public function show(AdminUser $adminUser)
    {
        return view('admin_users.show', compact('adminUser'));
    }

    /**
     * Muestra el formulario para editar un usuario administrador.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\View\View
     */
    public function edit(AdminUser $adminUser)
    {
        return view('admin_users.edit', compact('adminUser'));
    }

    /**
     * Actualiza los datos de un usuario administrador en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, AdminUser $adminUser)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_users,email,' . $adminUser->id,
            'password' => 'nullable|string|min:8',
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $adminUser->update($validatedData);

        return redirect()->route('admin_users.index')
            ->with('success', 'Usuario administrador actualizado exitosamente.');
    }

    /**
     * Elimina un usuario administrador de la base de datos.
     *
     * @param  \App\Models\AdminUser  $adminUser
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(AdminUser $adminUser)
    {
        $adminUser->delete();

        return redirect()->route('admin_users.index')
            ->with('success', 'Usuario administrador eliminado exitosamente.');
    }
}
