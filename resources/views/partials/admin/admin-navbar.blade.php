<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <div class="input-group input-group-navbar">
            <input class="form-control" type="text" aria-label="Search" placeholder="Search…">
            <button class="btn" type="button">
                <i class="align-middle" data-feather="search"></i>
            </button>
        </div>
    </form>

    <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="resourcesDropdown" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                <a class="dropdown-item" href="#" target="_blank"><i class="me-1 align-middle"
                        data-feather="home"></i>
                    Homepage</a>
            </div>
        </li>
    </ul>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            {{-- full screen --}}
            <li class="nav-item">
                <a class="nav-icon js-fullscreen d-none d-lg-block" href="#">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="maximize"></i>
                    </div>
                </a>
            </li>

            {{-- notification --}}
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" id="alertsDropdown" data-bs-toggle="dropdown" href="#">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">4</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        4 New Notifications
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">30m ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.8</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                </div>
                                <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a class="text-muted" href="#">Show all notifications</a>
                    </div>
                </div>
            </li>

            {{-- message --}}
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" id="messagesDropdown" data-bs-toggle="dropdown" href="#">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="message-square"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">
                            4 New Messages
                        </div>
                    </div>
                    <div class="list-group">
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img class="avatar img-fluid rounded-circle" src="{{asset('assets/admin/img/avatars/avatar-5.jpg')}}" alt="Vanessa Tucker">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Vanessa Tucker</div>
                                    <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img class="avatar img-fluid rounded-circle" src="{{asset('assets/admin/img/avatars/avatar-2.jpg')}}" alt="William Harris">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">William Harris</div>
                                    <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img class="avatar img-fluid rounded-circle" src="{{asset('assets/admin/img/avatars/avatar-4.jpg')}}" alt="Christina Mason">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Christina Mason</div>
                                    <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                    <div class="text-muted small mt-1">4h ago</div>
                                </div>
                            </div>
                        </a>
                        <a class="list-group-item" href="#">
                            <div class="row g-0 align-items-center">
                                <div class="col-2">
                                    <img class="avatar img-fluid rounded-circle" src="{{asset('assets/admin/img/avatars/avatar-3.jpg')}}" alt="Sharon Lessman">
                                </div>
                                <div class="col-10 ps-2">
                                    <div class="text-dark">Sharon Lessman</div>
                                    <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a class="text-muted" href="#">Show all messages</a>
                    </div>
                </div>
            </li>

            {{-- language --}}
            <li class="nav-item dropdown">
                <a class="nav-flag dropdown-toggle" id="languageDropdown" data-bs-toggle="dropdown" href="#">
                    <img src="{{asset('assets/admin/img/flags/us.png')}}" alt="English" />
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="#">
                        <img class="me-1 align-middle" src="{{asset('assets/admin/img/flags/us.png')}}" alt="English" width="20" />
                        <span class="align-middle">English</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <img class="me-1 align-middle" src="{{asset('assets/admin/img/flags/es.png')}}" alt="Spanish" width="20" />
                        <span class="align-middle">Spanish</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <img class="me-1 align-middle" src="{{asset('assets/admin/img/flags/ru.png')}}" alt="Russian" width="20" />
                        <span class="align-middle">Russian</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <img class="me-1 align-middle" src="{{asset('assets/admin/img/flags/de.png')}}" alt="German" width="20" />
                        <span class="align-middle">German</span>
                    </a>
                </div>
            </li>

            {{-- logout --}}
            <li class="nav-item">
                <a class="nav-icon d-none d-lg-block" href="{{route('logout')}}">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="log-out"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>