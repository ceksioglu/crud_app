<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserC extends Controller
{
    public function kayit(Request $request) {
    $girilen_data = $request->validate([
        'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name')],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:64'],
    ]);

    $girilen_data['password'] = bcrypt($girilen_data['password']); //Şifre hashleme
    $user = User::create($girilen_data); //Kayıtta verilen bilgiyi database iletir.
    auth()->login($user); //
    return redirect('/');
    }
}
