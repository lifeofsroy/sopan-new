@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | News </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section title="Recent News" link="Recent News" />

    <!--News Sidebar Start-->
    <section class="news-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-sidebar__left">
                        <div class="news-sidebar__content">
                            @foreach ($newses as $news)
                                <div class="news-sidebar__single">
                                    <div class="news-sidebar__img">
                                        <img src="{{ asset('storage') }}/{{$news->image}}" alt="">
                                        <div class="news-sidebar__date">
                                            <p>{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</p>
                                        </div>
                                    </div>

                                    <div class="news-sidebar__content-box">
                                        <h3 class="news-sidebar__title">
                                            <a href="{{ route('news.detail', $news->slug) }}">{{ $news->title }}</a>
                                        </h3>
                                        <p class="news-sidebar__text">{{ $news->overview }}</p>
                                        <div class="news-sidebar__bottom">
                                            <a class="news-sidebar__arrow" href="{{ route('news.detail', $news->slug) }}"><span
                                                    class="icon-right-arrow"></span></a>
                                            <a class="news-sidebar__read-more" href="{{ route('news.detail', $news->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="news-sidebar__load-more mt-4">
                            <a class="thm-btn news-sidebar__load-more-btn" href="#">Load more</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form class="sidebar__search-form" action="#">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>

                        <div class="sidebar__single sidebar__post">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>

                            <h3 class="sidebar__title">Our Projects</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($projects as $project)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('storage') }}/{{ $project->image }}" alt="{{ $project->title }}">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta">{{ $project->category->name }}</span>
                                                <a href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__post">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>

                            <h3 class="sidebar__title">Latest Events</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($events as $event)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('storage') }}/{{ $event->image }}" alt="{{ $event->title }}">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('event.detail', $event->slug) }}">{{ $event->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Sidebar End-->
@endsection
