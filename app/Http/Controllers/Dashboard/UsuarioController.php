<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard.usuarios.index')->only('index');
        $this->middleware('can:dashboard.usuarios.edit')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.usuarios.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user   = User::find($id);
        $roles  = Role::all();
        return view('dashboard.usuarios.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->roles);
        return redirect()->route('dashboard.usuarios.edit', $id)->with('info', __('Roles asignados correctamente'));

    }
}
