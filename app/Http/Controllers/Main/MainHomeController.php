<?php

namespace App\Http\Controllers\Main;

use App\Models\News;
use App\Models\Brand;
use App\Models\Event;
use App\Models\Counter;
use App\Models\Project;
use App\Models\HomeSlider;
use App\Models\HomeFeature;
use App\Models\HomeWelcome;
use App\Models\Testimonial;
use App\Models\HomeParallax;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainHomeController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('is_active', 1)->get();
        $welcome = HomeWelcome::first();
        $parallax = HomeParallax::first();
        $features = HomeFeature::get();
        $testimonials = Testimonial::get();
        $counters = Counter::get();
        $brands = Brand::get();
        $projects = Project::where('is_featured',1)->with('category')->get();
        $event = Event::where('happen_at', '>=', now())->where('is_active', 1)->first();

        $all = News::latest()->get();
        $news_first = $all->first();
        $news_others = $all->where('id', '!=', $news_first->id)->take(3);

        return view('pages.main.home.index', [
            'sliders' => $sliders,
            'welcome' => $welcome,
            'parallax' => $parallax,
            'features' => $features,
            'testimonials' => $testimonials,
            'counters' => $counters,
            'brands' => $brands,
            'projects' => $projects,
            'event'=> $event,
            'news_first'=> $news_first,
            'news_others'=> $news_others
        ]);
    }

    public function sliderDetail($slug)
    {
        $slider = HomeSlider::where('slug', $slug)->where('is_active', 1)->first();

        return view('pages.main.home.slider-detail', [
            'slider' => $slider
        ]);
    }

    public function featureDetail($slug)
    {
        $feature = HomeFeature::where('slug', $slug)->first();

        return view('pages.main.home.feature-detail', [
            'feature' => $feature
        ]);
    }
}
