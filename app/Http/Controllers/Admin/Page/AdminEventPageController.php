<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminEventPageController extends Controller
{
    public function index(){
        return view("pages.admin.page.event");
    }
}
