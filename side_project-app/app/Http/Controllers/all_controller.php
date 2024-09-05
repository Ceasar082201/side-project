<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class all_controller extends Controller
{
    public function index(){
        return view('user.');
    }
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('pwd'),
        ]);
        return redirect()->route('home')->with('success', 'Account Created Successfully');
    }
}
