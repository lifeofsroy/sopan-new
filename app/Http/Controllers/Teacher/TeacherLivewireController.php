<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherLivewireController extends Controller
{
    public function zoomSetting(){
        return view('pages.teacher.setting.zoom');
    }
}
