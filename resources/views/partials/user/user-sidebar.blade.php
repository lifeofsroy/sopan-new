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
    <li class="sidebar-item {{ Route::is('user.dashboard') ? 'active' : '' }}">
        <a class='sidebar-link' href='{{ route('user.dashboard') }}'>
            <i class="align-middle" data-feather="codesandbox"></i> <span class="align-middle">Dasboard</span>
        </a>
    </li>

    <li class="sidebar-item {{ Route::is('user.chat.index') ? 'active' : '' }}">
        <a class='sidebar-link' href='{{ route('user.chat.index') }}'>
            <i class="align-middle" data-feather="codesandbox"></i> <span class="align-middle">Chat</span>
        </a>
    </li>

    <li class="sidebar-header">
        Sections
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse">
            <i class="align-middle" data-feather="corner-right-down"></i> <span class="align-middle">Multi Level</span>
        </a>
        <ul class="sidebar-dropdown list-unstyled collapse" id="multi" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a class="sidebar-link collapsed" data-bs-target="#multi-2" data-bs-toggle="collapse">Two Levels</a>
                <ul class="sidebar-dropdown list-unstyled collapse" id="multi-2">
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Item 1</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Item 2</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link collapsed" data-bs-target="#multi-3" data-bs-toggle="collapse">Three Levels</a>
                <ul class="sidebar-dropdown list-unstyled collapse" id="multi-3">
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#multi-3-1" data-bs-toggle="collapse">Item 1</a>
                        <ul class="sidebar-dropdown list-unstyled collapse" id="multi-3-1">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#">Item 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
