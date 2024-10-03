<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UI;

class User extends Controller
{
   public function index()
   {
    //
    return view('temp_1');
    return DB::table('task')->get();
   }

   public function show(string $id)
   {
    

    return view();
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
        ''=>'',
        ''=>'',
        ''=>'',
    ]);
   }

   public function destroy(string $id)
   {
    //
   }
}
