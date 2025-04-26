<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $no=1;
        $users =User::all();

        return view('admin.index', compact('no','users'));
    }

    public function formTambahUser()
    {
        return view('admin.tambahData');
    }

    public function tambahUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        $dataUser = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ];

        User::create($dataUser);
       
        return redirect()->route('admin.index')->with('success', 'User created successfully.');
    }

    public function hapusUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }
    
    public function UpdateUser($id, Request $request)
    {
    
        $updateUser = [
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => $request->password,
            'level'     => $request->level,
        ];
        User::where('id', $id)->update($updateUser);

        return view('admin.edit', compact('user'));
    }
        
}
