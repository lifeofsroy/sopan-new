<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLivewireController extends Controller
{
    public function home(){
        return view("pages.admin.page.home");
    }
    public function about(){
        return view("pages.admin.page.about");
    }
    public function project(){
        return view("pages.admin.page.project");
    }
    public function event(){
        return view("pages.admin.page.event");
    }
    public function news(){
        return view("pages.admin.page.news");
    }
    public function contact(){
        return view("pages.admin.page.contact");
    }
}
