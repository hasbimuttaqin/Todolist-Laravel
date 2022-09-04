<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registeruser(Request $request)
    {
        $validatedAttributes = request()->validate([

            'name' => ['required', 'string'],

            'email' => ['required', 'unique:users' ,'email'],

            'password' => ['required', 'min:8', 'max:12']
        ],[
            'name.required' => 'Form Nama Wajib Di Isi',

            'email.required' => 'Form Email Wajib Di Isi',

            'password.required' => 'Form Password Wajib Di Isi'
        ]);


        User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('success','anda berhasil register');
    }
}
