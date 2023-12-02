<?php

namespace App\Http\Controllers\Main;

use App\Models\Donor;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->get();

        return view('pages.main.project.index', [
            'projects' => $projects
        ]);
    }

    public function deatil($slug)
    {
        $all = Project::with('category', 'comments')->get();
        $project = $all->where('slug', $slug)->first();
        $others = $all->where('id', '!=', $project->id)->take(5);
        $donors = Donor::get();

        return view('pages.main.project.detail', [
            'project'=> $project,
            'others'=> $others,
            'donors'=> $donors
        ]);
    }
}
