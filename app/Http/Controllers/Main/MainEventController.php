<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainEventController extends Controller
{
    public function index(){
        return view('pages.main.event.index');
    }

    public function deatil(){
        return view('pages.main.event.deatil');
    }
}
