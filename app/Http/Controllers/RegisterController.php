<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'telepon' => 'required|min:11|max:13|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration succesfull');

        return redirect('/login');

    }
}
