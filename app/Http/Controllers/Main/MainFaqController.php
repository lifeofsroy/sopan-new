<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainFaqController extends Controller
{
    public function index(){
        return view('pages.main.faq');
    }
}
