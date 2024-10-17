<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class displayController extends Controller
{
    public function index()
    {
        $users = User::all();
        $userCount = $users->count();
        return view('display.index', compact('users', 'userCount'));
    }

    //show the form for creating a new user
    public function create()
    {
        return view('display.create');
    }

    public function destroy ($id)
    {
        $user = User::findOrFail($id);
        $user -> delete();

        return redirect()->route('display.index');
    }

    //store a new created user in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        return redirect()->route('display.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('display.edit', compact(''));
    }

    // Update the specified User in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users',
            'password' => 'required',
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->save();

        return redirect()-> route('display.index');
    }

    public function updateCell(Request $request)
    {
        $user = User::find($request->id);
        $user->{$request->field} = $request->value;
        $success = $user->save();

        return response()->json(['success' => $success]);
    }
}
