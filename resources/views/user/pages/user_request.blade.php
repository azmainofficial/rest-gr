<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2 py-2">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center mb-0">Request Form</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('user.requestStore') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="unit_id" id="unit_id" value="{{ $value->id }}">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Project Name</label>
                                <input type="text" class="form-control" id="name" name="project_name"
                                    value="{{ $value->project->project_name }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Unit Name</label>
                                <input type="text" class="form-control" id="name" name="unit_name"
                                    value="{{ $value->property_name }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Floor</label>
                                <input type="text" class="form-control" id="name" name="floor_number"
                                    value="{{ $value->floor_number }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Block</label>
                                <input type="text" class="form-control" id="name" name="block"
                                    value="{{ $value->block }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name:</label>
                                <input type="text" class="form-control" id="name" name="full_name"
                                    value="{{ old('name') }}">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}">
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone') }}">
                            </div>

                            <div class="col-md-6">
                                <label for="college" class="form-label">Present Address</label>
                                <input type="text" class="form-control" id="college" name="present_address"
                                    value="{{ old('college') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender:</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="phone" name="occupation"
                                    value="{{ old('phone') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">Formal Picture</label>
                                <input class="form-control" type="file" id="formFile" name="formalImage">
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">NID Picture Select back and front</label>
                                <input class="form-control" type="file" id="formFile" name="image[]" multiple>
                            </div>
                            <div class="col-md-12">
                                <label for="phone" class="form-label">Short Detais</label>
                                <input type="text" class="form-control" id="phone" name="sort_details"
                                    placeholder="What is the perpose of rent!" value="{{ old('phone') }}">
                            </div>
                            <div class="col-12 mb-2">
                                <button type="submit" class="btn btn-primary w-100">Send Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
