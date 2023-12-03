@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | Projects </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section title="Our Projects" link="Projects" />

    <!--Donations List Start-->
    <section class="donations-list">
        <div class="container">
            <div class="donations-list__inner">
                @foreach ($projects as $project)
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="{{ asset('storage') }}/{{ $project->image }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>{{ $project->category->name }}</p>
                                        </div>
                                        <h3 class="donations-list__title"><a
                                                href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a></h3>
                                        <p class="donations-list__text">{{ Str::limit($project->overview, 180, '...') }} <a class="text-warning" href="{{ route('project.detail', $project->slug) }}">Read More</a></p>

                                        {{-- <div class="donations-list__progress">
                                            <div class="donations-list__progress-shape"
                                                style="background-image: url({{ asset('assets/main/images/shapes/donations-list-progress-shape-1.png') }});">
                                            </div>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="36%">
                                                    <div class="count-text">36%</div>
                                                </div>
                                            </div>
                                            <div class="causes-one__goals">
                                                <p><span>$25,270</span> Raised</p>
                                                <p><span>$30,000</span> Goal</p>
                                            </div>
                                        </div> --}}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Donations List End-->
@endsection
