<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function loginproses(Request $request)
    {

       $request->validate([

        'email' => ['required', 'email'],

        'password' => ['required']

       ],[

          'email.required' => 'Email harus di isi',

          'password.required' => 'Password harus di isi'
       ]);

       $user = User::whereEmail($request->email)->first();

       if ($user) {

          if (Hash::check($request->password, $user->password)) {

            Auth::login($user);


            return redirect('list')->with('success', 'Selamat datang di todolist app');
          }
       }

       throw ValidationException::withMessages([

        'email' => 'Maaf Email atau Password anda salah',
       ]);


        // if(Auth::attempt($request->only('email', 'password')));

        // {
        //     return redirect('list')->with('success','Selamat Datang Di Todolist App');
        // }

        // return redirect('/');

    }


    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Anda berhasil logout');
    }

}
