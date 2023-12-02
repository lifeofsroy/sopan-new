<?php

namespace App\Http\Controllers\Main;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainEventController extends Controller
{
    public function index()
    {
        $all = Event::with('category')->get();
        $events = $all->where('is_active', 1)->where('happen_at', '<', now());
        $upcoming = $all->where('happen_at', '>=', now())->where('is_active', 1)->first();

        return view('pages.main.event.index', [
            'events' => $events,
            'upcoming' => $upcoming
        ]);
    }

    public function detail($slug)
    {
        $event = Event::with('category')->where('slug', $slug)->where('is_active', 1)->firstOrFail();

        return view('pages.main.event.deatil', [
            'event'=> $event
        ]);
    }
}
