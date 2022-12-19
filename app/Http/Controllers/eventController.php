<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index(){
        return view('events.index');
    }

    public function create(){
        return view('events.create');
    }
}
