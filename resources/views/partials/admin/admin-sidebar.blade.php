<div class="sidebar-user">
    <div class="d-flex justify-content-center">
        <div class="flex-shrink-0">
            @if (!is_null(request()->user()->avatar))
                <img class="avatar img-fluid me-1 rounded" src="{{ '/storage' }}/{{ request()->user()->avatar }}"
                    alt="{{ request()->user()->name }}" />
            @else
                <img class="avatar img-fluid me-1 rounded" src="{{ asset('assets/admin/img/user.png') }}" alt="{{ request()->user()->name }}" />
            @endif

        </div>
        <div class="flex-grow-1 ps-2">
            <a class="sidebar-user-title dropdown-toggle" data-bs-toggle="dropdown" href="#">
                {{ request()->user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-start">
                <a class='dropdown-item' href='pages-profile.html'><i class="me-1 align-middle" data-feather="user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="me-1 align-middle" data-feather="pie-chart"></i> Analytics</a>
                <div class="dropdown-divider"></div>
                <a class='dropdown-item' href='pages-settings.html'><i class="me-1 align-middle" data-feather="settings"></i> Settings
                    &
                    Privacy</a>
                <a class="dropdown-item" href="#"><i class="me-1 align-middle" data-feather="help-circle"></i> Help Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
            </div>

            <div class="sidebar-user-subtitle">{{ request()->user()->type }}</div>
        </div>
    </div>
</div>

<ul class="sidebar-nav">
    <li class="sidebar-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
        <a class='sidebar-link' href='{{ route('admin.dashboard') }}'>
            <i class="align-middle" data-feather="codesandbox"></i> <span class="align-middle">Dasboard</span>
        </a>
    </li>

    <li class="sidebar-header">
        Sections
    </li>

    <li class="sidebar-item {{Route::is('admin.page*') ? 'active':''}}">
        <a class="sidebar-link {{Route::is('admin.page*') ? '':'collapsed'}}" data-bs-target="#sitePages" data-bs-toggle="collapse">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Pages</span>
        </a>
        <ul class="sidebar-dropdown list-unstyled {{Route::is('admin.page*') ? 'show':''}} collapse" id="sitePages" data-bs-parent="#sidebar">
            <li class="sidebar-item {{Route::is('admin.page.home') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.home')}}'>Home Page</a>
            </li>
            <li class="sidebar-item {{Route::is('admin.page.about') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.about')}}'>About Page</a>
            </li>
            <li class="sidebar-item {{Route::is('admin.page.project') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.project')}}'>Project Page</a>
            </li>
            <li class="sidebar-item {{Route::is('admin.page.event') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.event')}}'>Event Page</a>
            </li>
            <li class="sidebar-item {{Route::is('admin.page.news') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.news')}}'>News Page</a>
            </li>
            <li class="sidebar-item {{Route::is('admin.page.contact') ? 'active':''}}">
                <a class='sidebar-link' href='{{route('admin.page.contact')}}'>Contact Page</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a class='sidebar-link' href='{{route('logout')}}'>
            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
        </a>
    </li>
</ul>
