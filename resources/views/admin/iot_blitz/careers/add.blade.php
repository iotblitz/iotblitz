@extends('admin.common.layout')
@section('admin_page_content')
    <style>
        /* Some additional styling */
        .badge-container {
            display: inline-block;
            margin-right: 5px;
            /* Adjust as needed */
        }
    </style>



    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Careers Add</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Page</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.page.blog') }}">Solutions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <!-- support-section start -->



            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic Component</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('super_admin.page.careers_add') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="floating-label" for="title">Title</label>
                                                    <input type="title" class="form-control" id="title"
                                                        aria-describedby="titleHelp" name="title" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <select class="mb-3 form-control" name="countries" id="countries"
                                                    required="" required>
                                                    <option>Select countries</option>
                                                    @foreach ($countries as $countriesdata)
                                                        <option value="{{ $countriesdata->id }}">{{ $countriesdata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="mb-3 form-control" name="states" id="states"
                                                    required="" id="states" required>
                                                    <option>Select state</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="mb-3 form-control" name="cties" id="cties"
                                                    required="" required>
                                                    <option>Select Cties</option>
                                                </select>
                                            </div>


                                            <div class="col-sm-6">
                                                <select class="mb-3 form-control" name="job_role" id="job_role"
                                                    required="" required>
                                                    <option>Select Job Role</option>
                                                    @foreach ($role as $role_data)
                                                        <option value="{{ $role_data->careers_role_id }}">
                                                            {{ $role_data->role }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @php
                                                // Get the current date
                                                $current_date = date('Y-m-d');
                                                // Calculate the date one week from the current date
                                                $one_week_later = date('Y-m-d', strtotime('+1 week'));
                                            @endphp

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="floating-label" for="last_date">Application last
                                                        date</label>
                                                    <input type="date" class="form-control" id="last_date"
                                                        aria-describedby="last_dateHelp" name="last_date"
                                                        value="{{ $one_week_later }}" required>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <label class="floating-label" for="last_date">Experience completing work :
                                                </label>

                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="experience_level"
                                                        class="custom-control-input" value="Early" required>
                                                    <label class="custom-control-label"
                                                        for="customRadioInline1">Early</label>
                                                </div>

                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="experience_level"
                                                        class="custom-control-input" value="Mid" required>
                                                    <label class="custom-control-label" for="customRadioInline2">Mid</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline3" name="experience_level"
                                                        class="custom-control-input" value="Advance" required>
                                                    <label class="custom-control-label"
                                                        for="customRadioInline3">Advance</label>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <label class="floating-label" for="minimum_qualifications">Minimum
                                                    qualifications:</label>
                                                <textarea name="minimum_qualifications" placeholder="description" class="form-control ck_editor  ck_editor"
                                                    rows="12" cols="50" id="minimum_qualifications"></textarea>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="floating-label" for="preferred_qualifications">Preferred
                                                    qualifications:</label>
                                                <textarea name="preferred_qualifications" placeholder="description" class="form-control ck_editor" rows="12"
                                                    cols="50" id="preferred_qualifications"></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="floating-label" for="about_the_job">About the job:</label>
                                                <textarea name="about_the_job" placeholder="description" class="form-control ck_editor" rows="12"
                                                    cols="50" id="about_the_job"></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="floating-label"
                                                    for="responsibilities">Responsibilities:</label>
                                                <textarea name="responsibilities" placeholder="description" class="form-control ck_editor" rows="12"
                                                    cols="50" id="responsibilities"></textarea>
                                            </div>


                                            <div class="col-sm-12">
                                                <label class="floating-label" for="note_alert">Note Alert:</label>
                                                <textarea name="note_alert" placeholder="description" class="form-control ck_editor" rows="12" cols="50"
                                                    id="note_alert"></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <!-- [ form-element ] start -->


                <!-- [ accordion-collapse ] end -->




            </div>
        </div>

        <!-- Latest Customers end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
@section('admin_page_script')
    <script>
        window.onload = function() {


            $('.ck_editor').each(function() {
                CKEDITOR.replace($(this).prop('id'), {
                    // Enable ACF
                    allowedContent: true, // Enables ACF

                    // Define ACF rules
                    extraAllowedContent: 'img[alt,title]', // Allow alt and title attributes on images
                    disallowedContent: 'script', // Disallow script elements

                    // Configure ACF behavior
                    autoParagraph: false, // Don't automatically add <p> tags
                    fillEmptyBlocks: false, // Don't add <p>&nbsp;</p> for empty blocks
                    ignoreEmptyParagraph: true // Ignore empty paragraphs when filtering

                });
            });

            // CKEDITOR.replace('minimum_qualifications');
        };








        $(document).ready(function() {
            // Event listener for when the select element changes
            $('#countries').change(function() {

                var countri_id = $(this).val();

                // Make an AJAX request to get the list of values
                $.ajax({
                    url: '{{ route('api.state') }}',
                    method: 'GET',
                    data: {
                        countri_id: countri_id
                    },
                    success: function(response) {
                        // Clear existing options
                        console.log(response);
                        $('#states').empty();
                        $('#states').append('<option value="">Select state</option>');

                        // Populate the select element with new options
                        $.each(response, function(index, value) {
                            $('#states').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            });


            $('#states').change(function() {

                var state_id = $(this).val();

                // Make an AJAX request to get the list of values
                $.ajax({
                    url: '{{ route('api.cties') }}',
                    method: 'GET',
                    data: {
                        state_id: state_id
                    },
                    success: function(response) {
                        // Clear existing options
                        console.log(response);
                        $('#cties').empty();
                        $('#cties').append('<option value="">Select Cties</option>');

                        // Populate the select element with new options
                        $.each(response, function(index, value) {
                            $('#cties').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
