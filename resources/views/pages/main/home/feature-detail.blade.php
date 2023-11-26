@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $feature->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$feature->title" link="Feature" />

    <!--News details Start-->
    <section class="news-details">
        <div class="container">
            <div class="news-details__left">
                <div class="news-details__content">
                    {!! $feature->description !!}
                </div>
            </div>
        </div>
    </section>
    <!--News details End-->
@endsection
