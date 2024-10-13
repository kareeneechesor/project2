<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title') | Web Spa</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <style>
        .nav-item.active > a {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #f8f9fa;
        }

        .nav-collapse.show > li > a {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <div class="logo-header" data-background-color="dark">
                    <a href="/" class="logo">
                        <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
            </div>

            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item {{ Request::is('bookings') ? 'active' : '' }}">
                            <a data-bs-toggle="collapse" href="#bookingSection">
                                <i class="fas fa-calendar-check"></i>
                                <p>ข้อมูลการจอง</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ Request::is('bookings') ? 'show' : '' }}" id="bookingSection">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('bookings.index') }}">
                                            <i class="fas fa-list"></i>
                                            <p>รายการจอง</p>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('confirmed_bookings') ? 'active' : '' }}">
                                        <a href="{{ route('bookings.confirmed') }}">
                                            <i class="fas fa-check-circle"></i>
                                            <p>ดำเนินการแล้ว</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-times-circle"></i>
                                            <p>ยกเลิกการจอง</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item {{ Request::is('packages') ? 'active' : '' }}">
                          <a data-bs-toggle="collapse" href="#packageSection">
                              <i class="fas fa-box"></i>
                              <p>ข้อมูลแพคเกจ</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse {{ Request::is('packages') || Request::is('package-bookings') ? 'show' : '' }}" id="packageSection">
                              <ul class="nav nav-collapse">
                                  <li class="{{ Request::is('packages') ? 'active' : '' }}">
                                      <a href="{{ route('packages.index') }}">
                                          <i class="fas fa-box"></i>
                                          <p>รายการแพคเกจ</p>
                                      </a>
                                  </li>
                                  <li class="{{ Request::is('package-bookings') ? 'active' : '' }}">
                                    <a href="{{ route('package-bookings.index') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        <p>รายการจองแพคเกจ</p>
                                    </a>
                                </li>                                
                               
                              </ul>
                          </div>
                      </li>
                      
                        <li class="nav-item {{ Request::is('customers*') ? 'active' : '' }}">
                            <a href="{{ route('customers.index') }}">
                                <i class="fas fa-users"></i>
                                <p>จัดการข้อมูลลูกค้า</p>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                            <a data-bs-toggle="collapse" href="#servicesSection">
                                <i class="fas fa-concierge-bell"></i>
                                <p>ข้อมูลการบริการ</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ Request::is('services') ? 'show' : '' }}" id="servicesSection">
                                <ul class="nav nav-collapse">
                                    <li class="{{ Request::is('services') ? 'active' : '' }}">
                                        <a href="{{ route('services.index') }}">
                                            <i class="fas fa-list"></i>
                                            <p>รายการบริการ</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('time.index') }}">
                                            <i class="fas fa-clock"></i>
                                            <p>เวลา</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item {{ Request::is('promotions') ? 'active' : '' }}">
                            <a href="{{ route('promotions.index') }}">
                                <i class="fas fa-tags"></i>
                                <p>ข้อมูลโปรโมชั่น</p>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('employees') || Request::is('employee-schedules') ? 'active' : '' }}">
                            <a data-bs-toggle="collapse" href="#employeeSection">
                                <i class="fas fa-users"></i>
                                <p>ข้อมูลพนักงาน</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ Request::is('employees') || Request::is('employee-schedules') ? 'show' : '' }}" id="employeeSection">
                                <ul class="nav nav-collapse">
                                    <li class="{{ Request::is('employees') ? 'active' : '' }}">
                                        <a href="{{ route('employees.index') }}">
                                            <i class="fas fa-list"></i>
                                            <p>รายการพนักงาน</p>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('employee-schedules') ? 'active' : '' }}">
                                        <a href="{{ route('schedules.index') }}">
                                            <i class="fas fa-calendar-alt"></i>
                                            <p>ตารางงานพนักงาน</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-file-alt"></i>
                                <p>รายงาน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}"> <!-- Updated to use contact.create -->
                                <i class="fas fa-file-alt"></i>
                                <p>ข้อมูลติดต่อ</p>
                            </a>
                        </li>                                           
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Main Panel -->
        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                </div>

                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <div class="user-info">
                                            @if (Auth::check())
                                                <span class="full_name">{{ Auth::user()->name }}</span>
                                            @endif
                                        </div>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <!-- Optionally, add user details here -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container-fluid mt-3">
                <!-- Content -->
                @yield('content')
                <!-- End Content -->
            </div>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

    <!-- Custom Toggle Sidebar Script -->
    <script>
        $(document).ready(function () {
            // Sidebar toggle button functionality
            $('.toggle-sidebar').click(function () {
                $('.sidebar').toggleClass('sidebar-mini');
            });
        });
    </script>
</body>

</html>
