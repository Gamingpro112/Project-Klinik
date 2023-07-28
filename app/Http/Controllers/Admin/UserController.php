<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::orderBy('id', 'desc')->get();
        $currentUser = auth()->user();

        // Jika pengguna memiliki peran 'admin', ambil semua data pengguna
        if ($currentUser->hasRole('admin')) {
            $users = User::all();
        }
        // Jika pengguna memiliki peran 'operator', ambil data pengguna dengan peran 'operator' dan 'kabupaten'
        elseif ($currentUser->hasRole('kabupaten')) {
            $users = User::whereHas('roles', function ($query) {
                $query->whereIn('name', ['operator', 'kabupaten']);
            })->get();
        } else {
            // Tambahkan logika lain sesuai dengan kebutuhan jika diperlukan
            // Misalnya, jika tidak ada role yang cocok, berikan data kosong atau beri pesan error, dst.
            $users = collect();
        }
        return view('accounts.user.index', compact('users'));
    }

    public function create()
    {
        return view('accounts.user.create');
    }

    public function store(UserRequest $userRequest)
    {
        $validated = $userRequest->validated();

        $user = new User($validated);
        $user['uuid'] = Str::uuid();
        $user['password'] = Hash::make($validated['password']);
        $user->save();

        $user->assignRole($validated['rule']);

        return redirect()->route('user')->with('status', 'Data Pengguna Baru Berhasil di Tambahkan');
    }

    public function edit($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        $rules = ['admin', 'operator', 'kepala dinas', 'kabupaten'];
        return view('accounts.user.edit', compact('user', 'rules'));
    }

    public function update(UserUpdateRequest $userUpdateRequest, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        $validated = $userUpdateRequest->validated();

        $user->update($validated);

        return redirect()->route('user')->with('status', 'Data Pengguna Baru Berhasil di Edit');
    }

    public function editPassword($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('accounts.user.password', compact('user'));
    }

    public function updatePassword(PasswordRequest $passwordRequest, $uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        $validated = $passwordRequest->validated();

        $checkedPassword = Hash::check($validated['old_password'], $user->password);
        if ($checkedPassword == false) {
            return redirect()->back()->with('status', 'Password Sebelumnya Tidak Sesuai');
        }

        $user['password'] = Hash::make($validated['new_password']);
        $user->save();

        return redirect()->route('user')->with('status', 'Password Berhasil di Update');
    }

    public function destroy($uuid)
    {
        User::where('uuid', $uuid)->delete();

        return redirect()->route('user')->with('status', 'Data Pengguna Berhasil di Hapus');
    }
}
