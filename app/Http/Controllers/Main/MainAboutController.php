<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainAboutController extends Controller
{
    public function index(){
        return view('pages.main.about.index');
    }

    public function more(){
        return view('pages.main.about.more');
    }
}
