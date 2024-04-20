<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserC extends Controller
{
    public function kayit(Request $request) {
    $login_data = $request->validate([
        'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name')],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:64'],
    ]);

    $login_data['password'] = bcrypt($login_data['password']); //Şifre hashleme
    $user = User::create($login_data); //Kayıtta verilen bilgiyi database iletir.
    auth()->login($user); //
    return redirect('/');
    }

    public function giris(Request $request) {
    $login_data = $request->validate([
        'loginname' => 'required',
        'loginpassword' => 'required'
    ]);

        if (auth()->attempt(['name' => $login_data['loginname'], 'password' => $login_data['loginpassword']])) {
            $request->session()->regenerate();
        }
        return redirect('/');
    }

    public function cikis() {
        auth()->logout();
        return redirect('/');
    }
}
