<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('login') }}">
            <img src="{{ asset('global/img/logohitoefl.svg') }}" width="200px" alt="">
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Dashboard
            </li>

            <li class="sidebar-item {{Request::is('class') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.class.getIndex') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Class</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('bookclass') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.bookclass.getIndex') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Book
                        Class</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('exercise') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.exercise.getIndex') }}">
                    <i class="align-middle" data-feather="target"></i> <span
                        class="align-middle">Exercise</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('progress') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.progress.getIndex') }}">
                    <i class="align-middle" data-feather="bar-chart"></i> <span
                        class="align-middle">Progress</span>
                </a>
            </li>

            @can('isadmin')
            <li class="sidebar-header">
                Administrator
            </li>

            <li class="sidebar-item {{Request::is('userlist') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.userlist.getIndex') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">User
                        List</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('teachers') ? 'active' : '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard.teachers.getIndex') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Teacher
                        List</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('managementcourse') ? 'active' : '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard.managementcourse.getIndex') }}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Management
                        Course</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('managementtest') ? 'active' : '' }} ">
                <a class="sidebar-link" href="{{ route('dashboard.managementtest.getIndex') }}">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Management
                        Test</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('banksoal') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.banksoal.getIndex') }}">
                    <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Bank
                        Soal</span>
                </a>
            </li>
            @endcan

            <li class="sidebar-header">
                Payment
            </li>

            <li class="sidebar-item {{Request::is('coursepayment') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.coursepayment.getIndex') }}">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Course</span>
                </a>
            </li>

            <li class="sidebar-item {{Request::is('testpayment') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dashboard.coursepayment.getIndex') }}">
                    <i class="align-middle" data-feather="monitor"></i> <span
                        class="align-middle">Test</span>
                </a>
            </li>
        </ul>

    </div>
</nav>

<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                        data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <i class="align-middle" data-feather="bell"></i>
                            <span class="indicator">4</span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                        aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                            4 New Notifications
                        </div>
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-danger" data-feather="alert-circle"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">HiTOEFL almost ready</div>
                                        <div class="text-muted small mt-1">Beta test to complete the
                                            update.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-warning" data-feather="bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Get prepared for HiTOEFL</div>
                                        <div class="text-muted small mt-1">Development App on progress.</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-primary" data-feather="home"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">Login from 192.186.1.8</div>
                                        <div class="text-muted small mt-1">few ago</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="row g-0 align-items-center">
                                    <div class="col-2">
                                        <i class="text-success" data-feather="user-plus"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="text-dark">New connection</div>
                                        <div class="text-muted small mt-1">HiTOEFL accepted your request.
                                        </div>
                                        <div class="text-muted small mt-1">few ago</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-menu-footer">
                            <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                        data-bs-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                    </a>

                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href=""
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('global') }}/img/unknown.jpg" class="avatar img-fluid rounded me-3 important "
                            alt="" /> <span class="text-dark">{{ Auth::user()->username }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="settings"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link : class="text-black no-underline hover:underline" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
