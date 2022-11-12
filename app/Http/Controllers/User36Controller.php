<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class User36Controller extends Controller
{
    public function users36()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }
        $users = collect(User::where('role', 'User')->get());
        return view('user.users', [
            'no'=>1,
            'users'=>$users->sortBy('is_aktif', false),
            'role'=>$role
        ]);
    }

    public function profile36()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }
        return view('user.profile', [
            'role'=>$role
        ]);
    }

    public function detailUser36($id)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
        } else {
            $role = null;
        }

        $user = User::find($id);

        return view('user.detailUser', [
            'user'=>$user,
            'role'=>$role,
        ]);
    }

    // ===aprove user===
    public function approveUser36($id)
    {
        $user=User::find($id);
        $user->is_aktif=true;
        $user->save();

        return redirect('/users36')->with('success','Success Approve');
    }

    public function unapproveUser36($id)
    {
        $user=User::find($id);
        $user->is_aktif=false;
        $user->save();

        return redirect('/users36')->with('success','Un Approved Succes ');
    }

    public function deleteUser36($id)
    {
        User::find($id)->delete();
        return redirect('/users36')->with('success', 'Delete Succes');
    }

    public function login36()
    {
        return view('user.login');
    }

    public function loginProses36(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/');
        }
        return redirect('/login36')->with('error','Email or password wrong');
    }

    public function logout36(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register36()
    {
        return view('user.register');
    }

    public function registerProses36(Request $request)
    {
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
            'foto'=>$request->foto
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('img/', $request->file('foto')->getClientOriginalName());
            $user->foto=$request->file('foto')->getClientOriginalName();
            $user->save();
        }


        return redirect('/login36')->with('success','Register Berhasil');
    }

    public function updatePassword36()
    {
        return view('user.updatePassword');
    }

    public function updatePasswordProses36(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/profile36')->with('success','update password success');
    }

}
