<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REST.GR </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="{{ asset('ui/frontend/img') }}/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('ui/frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('ui/frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('ui/frontend') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('ui/frontend') }}/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="/" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="{{ asset('ui/frontend') }}/logo.png" alt="Icon"
                            style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">REST.GR</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item ">Projects List</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('user.signin') }}" class="btn btn-primary px-3 d-none d-lg-flex">Login</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white pt-5">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 pt-5 px-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Project List</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a href="#">Project List</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->





        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
                    <div class="container">
                        <form action="{{ route('user.search') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-2">
                                <div class="col-md-10">
                                    <div class="row g-2">
                                        {{-- <div class="col-md-4 textopia">
                                        <label for="customRange1" class="form-label">Example range</label>
                                        <input type="range" class="form-range border-0 py-3" id="customRange1">
                                    </div> --}}
                                        <div class="col-md-4 textopia">
                                            <input type="range" class="form-range border-0 py-3" id="customRange1"
                                                min="2000" max="1000000" name="rangevalue" step="1">
                                            <span id="rangeValue" class=""></span>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select border-0 py-3" name="floor_number">
                                                <option selected>Floor Number</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-select border-0 py-3" name="block_number">
                                                <option selected>Block</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($projects as $key => $project)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">

                                    @foreach (explode('|', $project->property_img) as $image)
                                        {{-- <img src="{{ asset('images/uploads/' . $image) }}" width="50"
                                                height="50" alt="Prasad Image" style="max-width: 100px;"> --}}
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid"
                                                    src="{{ asset('images/uploads/' . $image) }}" alt=""></a>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                {{ $project->property_type }}</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">{{ $project->property_rent }} Tk</h5>
                                            <a class="d-block h5 mb-2"
                                                href="">{{ $project->property_name }}</a>
                                            <p class="my-0">Service Charge -
                                                {{ $project->property_utility_cost }}</p>
                                            <p class="my-0">Floor - {{ $project->floor_number }}</p>
                                            <p class="my-0">Block - {{ $project->block }}</p>
                                            <p class="my-0"><i
                                                    class="fa fa-ruler-combined text-primary my-0 mx-2"></i>
                                                {{ $project->size }}
                                            </p>
                                            <p><i class="fa fa-map-marker-alt text-primary my-0 mx-2"></i>
                                                {{ $project->property_location }}
                                            </p>
                                            <a href="{{ route('user.projectRequest', $project->id) }}"
                                                class="btn btn-primary mb-3">Request</a>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">REST.GR</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('ui/frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('ui/frontend') }}/js/main.js"></script>
    <script>
        var rangeInput = document.getElementById("customRange1");

        // Get the span element where the range value will be displayed
        var rangeValue = document.getElementById("rangeValue");

        // Display the initial value
        rangeValue.innerHTML = rangeInput.value;
        rangeInput.addEventListener('input', function() {
            rangeValue.innerHTML = rangeInput.value;
        })
    </script>

</body>

</html>
