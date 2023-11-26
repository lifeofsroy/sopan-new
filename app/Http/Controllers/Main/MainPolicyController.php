<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPolicyController extends Controller
{
    public function privacy(){
        return view('pages.main.privacy-policy');
    }

    public function cookie(){
        return view('pages.main.cookie-policy');
    }
}
