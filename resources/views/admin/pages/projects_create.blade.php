<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Project Create</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/main.css" />
</head>

<body>
    <!-- ======== main-wrapper start =========== -->
    <div class="container pt-1">
        <section class="tab-components">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title">
                                <h2>Create Project</h2>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="breadcrumb-wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#0">Create</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Project
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->

                <!-- ========== form-elements-wrapper start ========== -->
                <div class="form-elements-wrapper">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        <form action="{{ route('admin.project.store') }}" class="row g-3" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-6">
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Project Details</h6>
                                    <div class="input-style-2">
                                        <label>Project Name</label>
                                        <input type="text" placeholder="" name="project_name" />
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-2">
                                        <label>Project Type</label>
                                        <input type="text" placeholder="" name="project_type" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Project Location</label>
                                        <input type="text" placeholder=" " name="project_location" />

                                    </div>
                                    <div class="input-style-2">
                                        <label>Project Address</label>
                                        <input type="text" placeholder=" " name="project_address" />

                                    </div>
                                    <!-- end input -->
                                </div>
                                <!-- end card -->
                                <!-- ======= input style end ======= -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <!-- ======= textarea style start ======= -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Additional Details</h6>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Project Picture</label>
                                        <input class="form-control" type="file" id="formFile" name="image[]"
                                            multiple>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Size</label>
                                        <input type="text" placeholder="" name="size" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Floor</label>
                                        <input type="text" placeholder="" name="floor" />
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                                    <!-- end textarea -->
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== form-elements-wrapper end ========== -->
            </div>
            <!-- end container -->
        </section>
    </div>


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
