<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UI;

class User extends Controller
{
   public function index()
   {
    //
    return view('temp_1');

   }

   public function show()
   {
    //
   }

   public function edit(string $id)
   {
    //
   }

   public function update(Request $request, string $id)
   {
    //
   }

   public function store(Request $request)
   {
    $request->validate([
        'name'=>'required|string|max:250',
        'email'=>'required|email|max:120',
        'password'=>'required|max: 8',
    ]);
    return redirect()->back()->with('Success','Form Submitted successfully');
   }

   public function destroy(string $id)
   {
    //
   }
}
