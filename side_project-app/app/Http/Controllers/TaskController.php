<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TaskController extends Controller
{
    public function index() {
        return view('task');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Task::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('welcome')->with('success', 'Task created!');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Task::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('welcome')->with('success', 'Task created!');
    }
}
