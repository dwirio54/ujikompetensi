<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class InvitememberController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('invite.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('invite.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            ]);
            
            $request->merge(['password' => bcrypt($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
            $user->syncRoles($request->get('roles'));

            flash()->success('Berhasil invite member');
        } else {
            flash()->error('tidak dapat menambahkan anggota baru');
        }

        return redirect()->back();
    }

     public function edit($id)
    {
        $array = [
            'user' => User::findOrFail($id),
            'role' => Role::pluck('name', 'id'),
        ];
        $roles = Role::all();
        
        return view('invite.edit', $array, compact('roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->merge(['password' => bcrypt($request->get('password'))]);
        $user->update($request->all());

        flash()->success('Berhasil mengubah data');
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->delete($request->all());

        flash()->success('Data berhasil dihapus');
        return redirect()->back();
    }
}
