<?php

namespace App\Http\Controllers\Main;

use App\Models\News;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainNewsController extends Controller
{
    public function index()
    {
        $newses = News::latest()->get();
        $projects = Project::with('category')->latest()->take(3)->get();
        $events = Event::where('is_active', 1)->where('happen_at', '<', now())->with('category')->latest()->take(3)->get();

        return view('pages.main.news.index', [
            'newses' => $newses,
            'projects' => $projects,
            'events' => $events
        ]);
    }

    public function detail($slug)
    {
        $all = News::get();
        $news = $all->where('slug', $slug)->first();
        $others = $all->where('id', '!=', $news->id)->take(5);

        return view('pages.main.news.detail', [
            'news' => $news,
            'others'=> $others
        ]);
    }
}
