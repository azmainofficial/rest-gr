<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('ui/backend/assets/images') }}/favicon.svg" type="image/x-icon" />
    <title>Real Estate</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/lineicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/materialdesignicons.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html" class="d-flex align-items-center">
        <img src="{{ asset('ui/backend') }}/logo.png" alt="logo" width="30px"/>
        <span class="logo-title">REST.GR</span>
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item active">
          <a href="/admin" >
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                <path
                  d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-item-has-children">
          <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon">
              <i class="lni lni-network"></i>
            </span>
            <span class="text">Agents</span>
          </a>
          <ul id="ddmenu_1" class="collapse dropdown-nav">
            <li>
              <a href="#">Add Agents</a>
            </li>
            <li>
              <a href="#">All Agents</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.leadlist') }}" >
            <span class="icon">
              <i class="lni lni-network"></i>
            </span>
            <span class="text">Leads</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.projects') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
              </svg>
            </span>
            <span class="text">Projects</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.report') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
              </svg>
            </span>
            <span class="text">Reports</span>
          </a>
        </li>
        

          <hr />
        </span>

        <li class="nav-item">
          <a href="{{ route('admin.notification') }}">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.8333 2.50008C10.8333 2.03984 10.4602 1.66675 9.99999 1.66675C9.53975 1.66675 9.16666 2.03984 9.16666 2.50008C9.16666 2.96032 9.53975 3.33341 9.99999 3.33341C10.4602 3.33341 10.8333 2.96032 10.8333 2.50008Z" />
                <path
                  d="M17.5 5.41673C17.5 7.02756 16.1942 8.33339 14.5833 8.33339C12.9725 8.33339 11.6667 7.02756 11.6667 5.41673C11.6667 3.80589 12.9725 2.50006 14.5833 2.50006C16.1942 2.50006 17.5 3.80589 17.5 5.41673Z" />
                <path
                  d="M11.4272 2.69637C10.9734 2.56848 10.4947 2.50006 10 2.50006C7.10054 2.50006 4.75003 4.85057 4.75003 7.75006V9.20873C4.75003 9.72814 4.62082 10.2393 4.37404 10.6963L3.36705 12.5611C2.89938 13.4272 3.26806 14.5081 4.16749 14.9078C7.88074 16.5581 12.1193 16.5581 15.8326 14.9078C16.732 14.5081 17.1007 13.4272 16.633 12.5611L15.626 10.6963C15.43 10.3333 15.3081 9.93606 15.2663 9.52773C15.0441 9.56431 14.8159 9.58339 14.5833 9.58339C12.2822 9.58339 10.4167 7.71791 10.4167 5.41673C10.4167 4.37705 10.7975 3.42631 11.4272 2.69637Z" />
                <path
                  d="M7.48901 17.1925C8.10004 17.8918 8.99841 18.3335 10 18.3335C11.0016 18.3335 11.9 17.8918 12.511 17.1925C10.8482 17.4634 9.15183 17.4634 7.48901 17.1925Z" />
              </svg>
            </span>
            <span class="text">Notifications</span>
          </a>
        </li>
      </ul>
    </nav>

  </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-15">
                                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                            <div class="header-search d-none d-md-flex">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">

                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <div class="image">
                                                <img src="https://media.licdn.com/dms/image/D5603AQE-QwZwHErGPA/profile-displayphoto-shrink_200_200/0/1709564558331?e=2147483647&v=beta&t=diOiE5lvJxWU460aZ9gaByvVZ6z52VO6feUeHKg62Pg"
                                                    alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-500">Adam Joe</h6>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <div class="author-info flex items-center !p-1">
                                            <div class="image">
                                                <img src="https://media.licdn.com/dms/image/D5603AQE-QwZwHErGPA/profile-displayphoto-shrink_200_200/0/1709564558331?e=2147483647&v=beta&t=diOiE5lvJxWU460aZ9gaByvVZ6z52VO6feUeHKg62Pg"
                                                    alt="image">
                                            </div>
                                            <div class="content">
                                                <h4 class="text-sm">Adam Joe</h4>
                                                <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                                                    href="#">Email@gmail.com</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-user"></i> View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">
                                            <i class="lni lni-alarm"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                                    </li>
                                    <li>
                                        <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="../index.html"> <i class="lni lni-exit"></i> Sign Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title">
                                <h2>Projects</h2>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#0">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Projects
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                {{-- <a href="./add-procruement.html" class="main-btn primary-btn rounded-full btn-hover">Add Procruemonet</a> --}}
                <div class="tables-wrapper mt-3">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <div class="header-search d-none d-md-flex">
                                    <form action="#">
                                        <input type="text" placeholder="Search..." />
                                        <button><i class="lni lni-search-alt"></i></button>
                                    </form>
                                </div>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="min-width">
                                                    <h6>#</h6>
                                                </th>
                                                <th class="lead-info">
                                                    <h6>Date</h6>
                                                </th>
                                                <th class="lead-email">
                                                    <h6>Lead Name</h6>
                                                </th>
                                                <th class="lead-email">
                                                    <h6>Project Name</h6>
                                                </th>
                                                <th class="lead-email">
                                                    <h6>Unit Name</h6>
                                                </th>
                                                <th class="lead-email">
                                                    <h6>Payed amount</h6>
                                                </th>
                                                <th class="lead-company">
                                                    <h6>Details</h6>
                                                </th>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td class="min-width">
                                                        <p>{{ $key+1 }}</p>
                                                    </td>

                                                    <td class="min-width">
                                                        <p>{{ $user->created_at }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <div class="lead">
                                                            <div class="lead-text">
                                                                <p><a href="">{{ $user->full_name }}</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>{{ $user->project_name }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>{{ $user->block }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>{{ $user->confirm_rent + $user->utility_cost }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p><a href="{{ route('admin.generatereport',$user->id) }}"><i class="fa-solid fa-ring text-success"></i></a></p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->


        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('ui/backend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/Chart.min.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/dynamic-pie-chart.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/moment.min.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/fullcalendar.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/jvectormap.min.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/world-merc.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/polyfill.js"></script>
    <script src="{{ asset('ui/backend') }}/assets/js/main.js"></script>

</body>

</html>
