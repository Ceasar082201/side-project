<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationPage() {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect('/login');
    }
    
    public function displayData() {
        $user = User::all();
        foreach ($user as $user) {
            $user -> local_created_at = $user -> created_at -> timezone('Asia/Manila')->format('d/m/Y H:i:s');
        }

        return view('display.index');
    }
}