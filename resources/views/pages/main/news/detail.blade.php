@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $news->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$news->title" link="News" />

    <!--Donation Details Start-->
    <section class="donation-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donation-details__left">
                        <div class="donation-details__top">
                            <div class="donation-details__img">
                                <img src="{{ asset('storage') }}/{{ $news->image }}" alt="{{ $news->title }}">
                                <div class="donation-details__date">
                                    <p>{{ Carbon\Carbon::parse($news->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="donation-details__content">
                                <h3 class="donation-details__title">{{ $news->title }}</h3>
                                {!! $news->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-5">
                    <div class="donation-details__sidebar">
                        <div class="sidebar__post">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>
                            <h3 class="sidebar__title">Other News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($others as $other)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('storage') }}/{{ $other->image }}" alt="{{ $other->title }}">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ route('project.detail', $other->slug) }}">{{ $other->title }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="donation-details__sidebar-shaare-cause">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>
                            <h3 class="donation-details__sidebar-shaare-cause-title">Share</h3>
                            <div class="donation-details__sidebar-shaare-cause-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End-->
@endsection
