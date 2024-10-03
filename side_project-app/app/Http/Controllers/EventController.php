<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return view('calendar');
    }

    public function store(Request $request) {
        Event::create($request->all());
        return response()->json(['success' => 'Event added successfully.']);
    }
}
