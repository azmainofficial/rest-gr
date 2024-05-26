<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Create User</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend') }}/assets/css/main.css" />
</head>

<body>


    <!-- ======== main-wrapper start =========== -->
    <div class="container pt-5">
        <section class="tab-components">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title">
                                <h2>Create User</h2>
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
                                            User
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
                    <div class="row">
                        <form action="{{ route('admin.userStore') }}" method="POST" class="row g-3"
                            enctype="multipart/form-data">
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
                            @csrf
                            <div class="col-lg-6">
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Property Details</h6>
                                    <input type="text" name="unit_id" value="{{ $client->unit->id }}" id="">
                                    <div class="input-style-2">
                                        <label>Project Name</label>
                                        <input type="text" placeholder="Full Name" name="projectName"
                                            value="{{ $client->project_name }}" readonly />
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-2">
                                        <label>Unit Name</label>
                                        <input type="text" placeholder="Full Name -2"
                                            value="{{ $client->unit_name }}" name="unitName" readonly />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Floor Number</label>
                                        <input type="text" placeholder="User Name" value="{{ $client->floor }}"
                                            name="floor" readonly />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Block</label>
                                        <input type="text" placeholder="Password" value="{{ $client->block }}"
                                            name="block" readonly />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Confirmed Rent</label>
                                        <input type="text" placeholder="Confirm Rent" name="confirmRent" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Utility Cost</label>
                                        <input type="text" placeholder="Full Name -2" name="utility" />
                                    </div>
                                    <!-- end input -->
                                </div>
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Name Field</h6>

                                    <div class="input-style-2">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Full Name" value="{{ $client->full_name }}"
                                            name="fullName" readonly />
                                        <span class="icon"> <i class="lni lni-user"></i> </span>
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-2">
                                        <label>Full Name - 2 (If any)</label>
                                        <input type="text" placeholder="Full Name -2" name="fullName2" />
                                        <span class="icon"> <i class="lni lni-user"></i> </span>
                                    </div>
                                    <div class="input-style-2">
                                        <label>User Name</label>
                                        <input type="text" placeholder="User Name" name="user_name" />
                                        <span class="icon"> <i class="lni lni-user"></i> </span>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Password</label>
                                        <input type="text" placeholder="Password" name="password" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Confirm Password</label>
                                        <input type="text" placeholder="Confirm Password"
                                            name="password_confirmation" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Father's/Husband's Name</label>
                                        <input type="text" placeholder="Full Name -2" name="fName" />
                                        <span class="icon"> <i class="lni lni-user"></i> </span>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Mother's name</label>
                                        <input type="text" placeholder="Full Name -2" name="mName" />
                                        <span class="icon"> <i class="lni lni-user"></i> </span>
                                    </div>
                                    <!-- end input -->
                                </div>
                                <!-- end card -->
                                <!-- ======= input style end ======= -->

                                <!-- ======= select style start ======= -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Personal Details</h6>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Formal Picture</label>
                                        <input class="form-control" type="file"
                                            value="{{ $client->formal_picture }}" name="formalPicture">
                                    </div>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">NID Picture</label>
                                        <input class="form-control" type="file" name="image[]" multiple>
                                    </div>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Formal Picture 2</label>
                                        <input class="form-control" type="file" name="formalPicture2">
                                    </div>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">NID Picture 2</label>
                                        <input class="form-control" type="file" name="image2[]" multiple>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Birth Date</label>
                                        <input type="date" name="dob" id="dob" />
                                        <span class="icon"><i class="lni lni-chevron-down"></i></span>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Email Address</label>
                                        <input type="email" placeholder="example@gmail.com" name="email" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Phone Number</label>
                                        <input type="text" placeholder="" name="phone_number" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Permanent Address</label>
                                        <input type="text" placeholder="Permanent Address"
                                            name="permanentAddress" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Present Address</label>
                                        <input type="text" placeholder="Present Address" name="presentAddress" />
                                    </div>

                                </div>
                                <!-- end card -->

                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <!-- ======= textarea style start ======= -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Additional Details</h6>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Aggrement Attatchment</label>
                                        <input class="form-control" type="file" name="attach[]" multiple>
                                    </div>
                                    <div class="input-style-2">
                                        <label>City</label>
                                        <input type="text" placeholder="" name="city" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>State</label>
                                        <input type="text" placeholder="" name="state" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Postal Code</label>
                                        <input type="text" placeholder="" name="postalCode" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Country</label>
                                        <input type="text" placeholder="" name="Country" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Profession</label>
                                        <input type="text" placeholder="" name="Profession" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Nationality</label>
                                        <input type="text" placeholder="" name="Nationality" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Religion</label>
                                        <input type="text" placeholder="" name="Religion" />
                                    </div>
                                    <!-- end textarea -->
                                </div>
                                <!-- ======= textarea style end ======= -->

                                <!-- ======= checkbox style start ======= -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Nominee Details</h6>
                                    <div class="input-style-2">
                                        <label>Nominee Name (If any)</label>
                                        <input type="text" placeholder="" name="nName" />
                                    </div>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Nominee Formal Photo</label>
                                        <input class="form-control" type="file" name="nomineeFormalPicture">
                                    </div>
                                    <div class="input-style-2">
                                        <label for="formFile" class="form-label">Nominee NID</label>
                                        <input class="form-control" type="file" name="image4[]" multiple>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Nominee Phone Number</label>
                                        <input type="text" placeholder="" name="nominnePhoneNumber" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Relationship</label>
                                        <input type="text" placeholder="" name="Relationship" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Share</label>
                                        <input type="text" placeholder="" name="Share" />
                                    </div>
                                    <div class="input-style-2">
                                        <label for="months">Assign Month:</label>
                                        <select class="form-select" name="months" id="months">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">Merch</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">Setember</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                                    <!-- end checkbox -->
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
