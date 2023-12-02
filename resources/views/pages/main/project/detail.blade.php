@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $project->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$project->title" link="Projects" />

    <!--Donation Details Start-->
    <section class="donation-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donation-details__left">
                        <div class="donation-details__top">
                            <div class="donation-details__img">
                                <img src="{{ asset('storage') }}/{{ $project->image }}" alt="{{ $project->title }}">
                                <div class="donation-details__date">
                                    <p>Medical</p>
                                </div>
                            </div>
                            <div class="donation-details__content">
                                <h3 class="donation-details__title">{{ $project->title }}</h3>
                                {!! $project->description !!}
                            </div>
                        </div>
                        {{-- <div class="donation-details__donate">
                            <div class="donation-details__donate-shape"
                                style="background-image: url({{ asset('assets/main/images/shapes/donation-details-donate-shape.png')}});">
                            </div>
                            <div class="donation-details__donate-left">
                                <ul class="list-unstyled donation-details__donate-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-solidarity"></span>
                                        </div>
                                        <div class="text">
                                            <span>Raised</span>
                                            <p>$25,270</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-target-1"></span>
                                        </div>
                                        <div class="text">
                                            <span>Goal</span>
                                            <p>$30,000</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="donation-details__donate-btn">
                                <a class="thm-btn" href="donate-now.html">Donate now</a>
                            </div>
                        </div> --}}

                        <div class="donation-details__recent-donation">
                            <h3 class="donation-details__recent-donation-title">Recent donors</h3>
                            <div class="list-unstyled donation-details__recent-donation-inner">
                                <div class="donation-details__recent-donation-shape"
                                    style="background-image: url({{ asset('assets/main/images/shapes/recent-donation-shape-1.png') }});">
                                </div>
                                <ul class="list-unstyled donation-details__recent-donation-list">
                                    @foreach ($donors as $donor)
                                        <li>
                                            <div class="donation-details__recent-donation-img">
                                                @if ($donor->image)
                                                    <img src="{{ asset('storage') }}/{{ $donor->image }}" alt="{{ $donor->name }}">
                                                @else
                                                    <img src="{{ asset('assets/main/images/resources/recent-donation-img-1.jpg') }}"
                                                        alt="{{ $donor->name }}">
                                                @endif
                                            </div>
                                            <div class="donation-details__recent-donation-content">
                                                <p>{{ $donor->name }}</p>
                                                <p class="text-secondary">{{ $donor->designation }}</p>
                                                <span>{{ $donor->amount }}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="comment-one">
                            <h3 class="comment-one__title">{{ count($project->comments) }}
                                {{ count($project->comments) > 1 ? Str::plural('Comment') : 'Comment' }} Found</h3>
                            @foreach ($project->comments as $comment)
                                <div class="comment-one__single">
                                    <div class="comment-one__content">
                                        <h3>{{ $comment->user->name }}</h3>
                                        <h6 class="text-secondary">({{ optional($comment->user->profile)->designation }})</h6>
                                        <p>{{ $comment->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mb-4" style="border-bottom: 1px solid var(--oxpins-bdr-color);"></div>

                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a comment</h3>
                            @auth
                                <form class="comment-one__form contact-form-validated" action="" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button class="thm-btn comment-form__btn" type="submit">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <a class="thm-btn comment-form__btn" href="{{ route('login') }}">Sign in to comment</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="donation-details__sidebar">
                        <div class="donation-details__organizer">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>
                            <div class="donation-details__organizer-content">
                                <p class="donation-details__organizer-title">Started at:</p>
                                <p class="donation-details__organizer-name">{{ date('jS F, Y', strtotime($project->started_at)) }}</p>
                            </div>
                        </div>
                        <div class="sidebar__post">
                            <div class="sidebar-shape-1" style="background-image: url({{ asset('assets/main/images/shapes/sidebar-shape-1.png') }});">
                            </div>
                            <h3 class="sidebar__title">Other Projects</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($others as $other)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('storage') }}/{{ $other->image }}" alt="{{ $other->title }}">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta">{{ $other->category->name }}</span>
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
