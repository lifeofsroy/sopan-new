@extends('layouts.admin')
@section('admin-section')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-xl-3 mb-2">
                <div class="d-none d-sm-block col-auto">
                    <h3><strong>Home</strong> Page</h3>
                </div>
            </div>

            <livewire:admin.page.home.admin-home-slider>
                <livewire:admin.page.home.admin-home-welcome>
                    <livewire:admin.page.home.admin-home-feature>
                        <livewire:admin.page.home.admin-home-parallax>
        </div>
    </main>
@endsection

@push('admin-script')
    <x-admin.admin-notify />
@endpush
