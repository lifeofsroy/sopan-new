<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentLivewireController extends Controller
{
    public function zoomClass(){
        return view('pages.student.class.all-class');
    }
}
