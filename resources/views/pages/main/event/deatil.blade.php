@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $event->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$event->title" link="Events" />

    <!--Event Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="event-details__left">
                        <div class="event-details__top">
                            <div class="event-details__date">
                                <p>{{ $event->category->title }}</p>
                            </div>
                            <h3 class="event-details__title">{{ $event->title }}</h3>

                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="event-details__right">
                        <div class="event-details__info">
                            <ul class="list-unstyled event-details__info-list">
                                <li>
                                    <span>Date:</span>
                                    <p>{{ date('jS M, Y', strtotime($event->happen_at)) }}</p>
                                </li>

                                <li>
                                    <span>Time:</span>
                                    <p>{{ date('h:i a', strtotime($event->happen_at)) }}</p>
                                </li>

                                <li>
                                    <span>Location:</span>
                                    <p>{{ $event->location }}</p>
                                </li>

                                <li>
                                    <span>Route:</span>
                                    <p>{{ $event->route ? $event->route : $contact->route }}</p>
                                </li>
                            </ul>
                            <div class="event-details__social">
                                @foreach ($socials as $social)
                                    <a href="{{ $social->url }}" target="_blank"><i class="{{ $social->icon }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                        <div class="event-details__map">
                            <iframe class="event-details-map__one" src="{{ $event->mapurl ? $event->mapurl : $contact->mapurl }}"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Event Details End-->
@endsection
