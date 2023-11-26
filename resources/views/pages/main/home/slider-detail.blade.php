@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $slider->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$slider->title" link="Slider" />

    <!--News details Start-->
    <section class="news-details">
        <div class="container">
            <div class="news-details__left">
                <div class="news-details__content">
                    {!! $slider->description !!}
                </div>
            </div>
        </div>
    </section>
    <!--News details End-->
@endsection
