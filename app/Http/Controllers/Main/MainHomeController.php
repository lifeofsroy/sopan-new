<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\HomeFeature;
use App\Models\HomeParallax;
use App\Models\HomeSlider;
use App\Models\HomeWelcome;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class MainHomeController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('is_active', 1)->get();
        $welcome = HomeWelcome::first();
        $parallax = HomeParallax::first();
        $features = HomeFeature::get();
        $testimonials = Testimonial::get();

        return view('pages.main.home.index', [
            'sliders' => $sliders,
            'welcome' => $welcome,
            'parallax' => $parallax,
            'features' => $features,
            'testimonials' => $testimonials,
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
