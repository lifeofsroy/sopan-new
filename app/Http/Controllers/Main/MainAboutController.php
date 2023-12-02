<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\AboutFeature;
use App\Models\AboutWelcome;
use App\Models\Achievement;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class MainAboutController extends Controller
{
    public function index(){
        $features = AboutFeature::get();
        $welcome = AboutWelcome::first();
        $achievements = Achievement::get();
        $team = TeamMember::get();
        $members = $team->where('type', 'member');
        $volunteers = $team->where('type', 'volunteer');

        return view('pages.main.about.index', [
            'features'=> $features,
            'welcome'=> $welcome,
            'achievements'=> $achievements,
            'members'=> $members,
            'volunteers'=> $volunteers
        ]);
    }

    public function more(){
        $aboutmore = AboutWelcome::first();
        
        return view('pages.main.about.more', [
            'aboutmore'=> $aboutmore
        ]);
    }
}
