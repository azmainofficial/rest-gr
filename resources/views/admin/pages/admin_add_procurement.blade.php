<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('ui/backend/assets/images') }}/favicon.svg" type="image/x-icon" />
    <title>Sign In | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('ui/backend/') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend/') }}/assets/css/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend/') }}/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend/') }}/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="{{ asset('ui/backend/') }}/assets/css/main.css" />
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
                                <h2>Add Procruement</h2>
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
                    <div class="row">
                        <form action="{{ route('admin.reportStore') }}" class="row g-3" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-6">
                                <!-- input style start -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Lead Details</h6>
                                    <input type="hidden" name="month_id" id="" value="{{ $month->id }}">
                                    <input type="hidden" name="user_id" id="" value="{{ $month->user->id }}">
                                    <div class="input-style-2">
                                        <label>Lead Name</label>
                                        <input type="text" placeholder=" " value="{{ $month->user->full_name }}"
                                            name="lead_name" />
                                    </div>
                                    <!-- end input -->
                                    <div class="input-style-2">
                                        <label>Project Name</label>
                                        <input type="text" placeholder="" value="{{ $month->user->project_name }}"
                                            name="project_name" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Floor Name</label>
                                        <input type="text" placeholder=" " value="{{ $month->user->floor }}"
                                            name="floor_number" />
                                    </div>
                                    <div class="input-style-2">
                                        <label>Unit Name</label>
                                        <input type="text" placeholder=" " value="{{ $month->user->block }}"
                                            name="unit_name" />
                                    </div>
                                    <div class="input-style-2">
                                        <label for="months">Assign Month:</label>
                                        <select class="form-select" name="months[]" id="months" multiple
                                            onchange="updateTotal()">
                                            @foreach ($zeroValueColumn as $key => $value)
                                                <option value="{{ $value }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-style-2">
                                        <label>Payed Amount</label>
                                        <input type="text" id="totalAmount" name="payed_amount" placeholder=" "
                                            value="{{ $month->user->confirm_rent + $month->user->utility_cost }}"
                                            readonly />
                                    </div>
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
                                        <label for="formFile" class="form-label">Attachment Picture</label>
                                        <input class="form-control" type="file" name="image" id="formFile">
                                    </div>
                                    <button type="submit" class="btn btn-primary px-4 py-2">Submit</button>
                                    <!-- end textarea -->
                                </div>
                            </div>
                        </form>
                        <!-- end col -->
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


    <script>
        function updateTotal() {
            var selectElement = document.getElementById('months');
            var total = 0;
            for (var i = 0; i < selectElement.selectedOptions.length; i++) {
                total++
            }

            var multiplier = selectElement.selectedOptions.length;
            var initialAmount = parseFloat("{{ $month->user->confirm_rent + $month->user->utility_cost }}");
            console.log(total * initialAmount);
            var finalAmount = multiplier * initialAmount;
            document.getElementById('totalAmount').value = finalAmount.toFixed(0);
        }
    </script>








</body>

</html>
