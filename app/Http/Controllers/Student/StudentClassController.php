<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function index(){
        return view('pages.student.class.all-class');
    }
}
