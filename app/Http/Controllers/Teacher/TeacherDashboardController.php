<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function dashboardPage(){
        return view('pages.teacher.dashboard');
    }
}
