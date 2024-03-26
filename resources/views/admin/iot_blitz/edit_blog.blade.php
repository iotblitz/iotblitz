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
                        <h5 class="m-b-10">Blog List</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Page</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('super_admin.page.blog') }}">Blog</a></li>
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
                        <div class="card-body">
                            <form method="POST" action="{{ route('super_admin.page.blog_edit', $blog_id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="floating-label" for="title">Title address</label>
                                            <input type="title" class="form-control" id="title"
                                                aria-describedby="titleHelp" name="title"
                                                value="{{ $editdata->blog_title }}">
                                        </div>
                                    </div>



                                    <div class="col-sm-4">
                                        <input type="hidden" value="{{ $editdata->blog_image }}" name="old_image">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile"
                                            name="blogimage" >
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="img">
                                            <img id="previewImage"
                                                src="{{ asset('public/blog_images') }}/{{ $editdata->blog_image }}"
                                                class="img-fluid" alt="Preview Image">
                                        </div>
                                    </div>



                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="inputWithBadges">Keyword</label>
                                            <input type="text" class="form-control" id="inputWithBadges" placeholder=""
                                                name="keyword" value="{{ $editdata->blog_keywords }}">
                                            <div id="badgeContainer"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="description_editor" placeholder="description" class="form-control" rows="12" cols="50">
                                            {!! $editdata->blog_description !!}
                                        </textarea>
                                    </div>
                                    <input type="hidden" id="editorValue" name="text_description" value="{{$editdata->text_description}}">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
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
            // CKEDITOR.editorConfig = function(config) {
            //     config.extraPlugins = 'confighelper';
            // };
            // CKEDITOR.replace('editor1');
            // CKEDITOR.replace('myeditor');
            CKEDITOR.replace('description_editor', {
                on: {
                    instanceReady: function(ev) {
                        ev.editor.on('change', function() {
                            var editorData = ev.editor.getData(); // Get HTML content from CKEditor
                            var plainText = editorData.replace(/<[^>]*>/g, ''); // Remove HTML tags
                            document.getElementById('editorValue').value =
                            plainText; // Set the value to hidden input
                            console.log(plainText);
                        });
                    }
                }
            });
        };


        // JavaScript to add badges dynamically
        $('#inputWithBadges').on('input', function() {
            var inputVal = $(this).val();
            $('#badgeContainer').empty();
            if (inputVal.trim() !== '') {
                var badges = inputVal.split(',');
                // var badges = inputVal.split(/,|\s/);
                badges.forEach(function(badge) {
                    $('#badgeContainer').append('<span class="badge badge-primary badge-container">' +
                        badge + '</span>&nbsp;');
                });
            }
        });



        document.getElementById('validatedCustomFile').addEventListener('change', function(e) {
            var fileInput = e.target;
            var file = fileInput.files[0];
            var imageType = /image.*/;

            if (file.type.match(imageType)) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('previewImage').setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(file);
            } else {
                document.getElementById('previewImage').setAttribute('src', '');
            }
        });
    </script>
@endsection
