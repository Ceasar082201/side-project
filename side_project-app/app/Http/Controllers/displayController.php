<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class displayController extends Controller
{
    public function index(){
        return view('display.index');
    }

    public function create(){
        
    }
}
