@extends('layouts.app')
@push('title')
    <title> {{ config('app.name') }} | {{ $aboutmore->title }} </title>
@endpush

@section('main-section')
    <!--Page Header-->
    <x-main.breadcrumb-section :title="$aboutmore->title" link="About Us" />

    <!--News details Start-->
    <section class="news-details">
        <div class="container">
            <div class="news-details__left">
                <div class="news-details__content">
                    {!! $aboutmore->description !!}
                </div>
            </div>
        </div>
    </section>
    <!--News details End-->
@endsection
