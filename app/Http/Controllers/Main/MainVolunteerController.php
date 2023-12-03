<?php

namespace App\Http\Controllers\Main;

use App\Models\HomeParallax;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainVolunteerController extends Controller
{
    public function index()
    {
        $parallax = HomeParallax::select('image')->first();

        return view('pages.main.volunteer', [
            'parallax' => $parallax
        ]);
    }
}
