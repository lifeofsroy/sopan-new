<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainProductController extends Controller
{
    public function index(){
        return view('pages.main.product.index');
    }
    public function deatil(){
        return view('pages.main.product.detail');
    }
}
