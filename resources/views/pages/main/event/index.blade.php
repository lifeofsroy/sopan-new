@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Events </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section title="Our Events" link="Events" />

    <!--Upcoming-->
    @if ($upcoming)
        <section class="make-donation">
            <div class="container">
                <div class="make-donation__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="make-donation__left">
                                <div class="make-donation__img">
                                    <img src="{{ asset('storage') }}/{{ $upcoming->image }}" alt="{{ $upcoming->title }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <div class="make-donation__right">
                                <div class="make-donation__content">
                                    <div class="make-donation__btn-box">
                                        <a class="thm-btn make-donation__btn" href="#">Register now</a>
                                    </div>
                                    <ul class="list-unstyled make-donation__meta">
                                        <li><a href="#"> <i class="fas fa-calendar-alt"></i> Left
                                                {{ Carbon\Carbon::parse($upcoming->happen_at)->diffForHumans() }}</a></li>
                                        <li><a href="#"> <i class="fas fa-map-marker-alt"></i> {{ $upcoming->location }}</a></li>
                                    </ul>
                                    <a href="{{ route('event.detail', $upcoming->slug) }}">
                                        <h3 class="make-donation__title">{{ $upcoming->title }}</h3>
                                    </a>
                                    
                                    <p class="make-donation__text">{{ $upcoming->overview }}... <a class="text-warning" href="{{ route('event.detail', $upcoming->slug) }}">Read More</a></p>
                                    <ul class="list-unstyled make-donation__raised-goal">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-calendar-times"></i>
                                            </div>
                                            <div class="content">
                                                <h4>{{ date('jS M, Y', strtotime($upcoming->happen_at)) }}</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="content">
                                                <h4>{{ date('h:i a', strtotime($upcoming->happen_at)) }}</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--Events-->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('storage') }}/{{ $event->image }}" alt="{{ $event->title }}">
                                <div class="events-one__date">
                                    <p>{{ $event->category->title }}</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>{{ date('jS M, Y', strtotime($event->happen_at)) }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ explode(',', $event->location)[0] }}</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('event.detail', $event->slug) }}">{{ $event->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
