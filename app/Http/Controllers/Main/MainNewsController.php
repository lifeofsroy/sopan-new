<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainNewsController extends Controller
{
    public function index(){
        return view('pages.main.news.index');
    }

    public function deatil(){
        return view('pages.main.news.detail');
    }
}