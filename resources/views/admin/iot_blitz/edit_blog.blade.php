@extends('admin.common.layout')
@section('admin_page_content')
    <style>
        /* Some additional styling */
        .badge-container {
            display: inline-block;
            margin-right: 5px;
            /* Adjust as needed */
        }

        .clickable {
            margin: 0.5px;
            background-color: rgb(89, 89, 89);
            color: white;
        }


        .highlight {
            background-color: yellow;
            padding: 50px;
        }
        .custom-btn{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        .error{
            color: red;
        }
    </style>



    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Update Blog</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
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

           {{-- {{ auth()->user()->user_info}} --}}
           <form method="POST" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label" for="title">Blog Title</label>
                                                <input type="text" class="form-control required-field" id="title" aria-describedby="titleHelp" name="title" value="{{ $editdata->blog_title }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea name="description_editor" placeholder="description" class="form-control required-field description_editor" rows="12" cols="50">{!! $editdata->blog_description !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label" for="mataTitle">Meta title</label>
                                                <input type="text" class="form-control" id="mataTitle" name="mataTitle" value="{{$editdata->meta_title}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="floating-label" for="metaDescriptions">Meta descriptions</label>
                                                <input type="text" class="form-control" id="metaDescriptions" name="metaDescriptions" value="{{$editdata->meta_descriptions}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="focusKeyword">Focus Keyword</label>
                                                <input type="text" class="form-control" id="focusKeyword" name="focusKeyword" value="{{$editdata->focus_keyword}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="inputWithBadges">Secondary Keywords</label>
                                                <input type="text" class="form-control" id="inputWithBadges" placeholder="" name="keyword" value="{{ $editdata->blog_keywords }}">
                                                <div id="badgeContainer"></div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="editorValue" name="text_description" value="{{$editdata->text_description}}">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-block custom-btn" style="" id="publish"><span>PUBLISH</span><i class="fas fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <button type="submit" class="btn btn-success btn-block shadow p-3 mb-2 rounded custom-btn" id="save"><span>SAVE</span><i class="fas fa-check"></i></button>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-sm-12 mb-3 mt-2">


                                        @if(!empty($editdata->blog_image))
                                        <img id="previewImage" src="{{ asset('public/blog_images') }}/{{ $editdata->blog_image }}" class="img-fluid" alt="Preview Image">
                                        @else
                                        <img id="previewImage" src="https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg" class="img-fluid" alt="Preview Image">
                                        @endif



                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="hidden" value="{{ $editdata->blog_image }}" name="old_image">
                                            <input type="file" class="custom-file-input required-field" id="validatedCustomFile" name="blogimage" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="fimagealttxt">Featured Image Alt Text</label>
                                            <input type="text" class="form-control" id="fimagealttxt" name="fimagealttxt" value="{{$editdata->featured_image_alt_text}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="imagedescriotion">Image Description</label>
                                            <input type="text" class="form-control" id="imagedescriotion" name="imagedescriotion" value="{{$editdata->image_description}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="imageCaption">Image caption</label>
                                            <input type="text" class="form-control" id="imageCaption" name="imageCaption" value="{{$editdata->image_caption}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="imageTitle">Image title</label>
                                            <input type="text" class="form-control" id="imageTitle" name="imageTitle" value="{{$editdata->image_title}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-sm-12  mt-2 mb-2">

                                    <select class="mb-3 form-control" name="content_category" >
                                        <option value="B" @if($editdata->content_category=='B') selected @endif>Blog</option>
                                        <option value="N" @if($editdata->content_category=='N') selected @endif>News</option>
                                    </select>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="col-sm-12 mt-2">
                                    <div class="form-group">
                                        <label class="floating-label" for="blogExcerpt">Blog Excerpt</label>
                                        <input type="text" class="form-control" id="blogExcerpt" name="blogExcerpt" maxlength="205" value="{{$editdata->ZZZZZZZZ}}">
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="searchTags" class="floating-label">Search Tags:</label>
                                        <input type="text" class="form-control" id="searchTags" name="searchTags" value="@foreach($editdata->public_tags as $tag)@if ($tag->tag)@if($tag->tag->tags_name){{$tag->tag->tags_name.','}}@endif @endif @endforeach">
                                        <div id="tagsContainer">
                                            <!-- Tags will be inserted here dynamically -->
                                        </div>
                                        <ul class="list-group mt-3" id="similarTagsList">
                                            <!-- Similar tags will be inserted here dynamically -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>


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
            // CKEDITOR.replace('description_editor', function() {
            //     var editorData = CKEDITOR.instances.editor.getData(); // Get HTML content from CKEditor
            //     var plainText = editorData.replace(/<[^>]*>/g, ''); // Remove HTML tags
            //     document.getElementById('editorValue').value = plainText; // Set the value to hidden input
            //     console.log(plainText)
            // });

            // CKEDITOR.replace('description_editor', {
            //     on: {
            //         instanceReady: function(ev) {
            //             ev.editor.on('change', function() {
            //                 var editorData = ev.editor.getData(); // Get HTML content from CKEditor
            //                 var plainText = editorData.replace(/<[^>]*>/g, ''); // Remove HTML tags
            //                 document.getElementById('editorValue').value =
            //                     plainText; // Set the value to hidden input
            //                 console.log(plainText);
            //             });
            //         }
            //     }
            // });



            // Define the custom plugin
CKEDITOR.plugins.add('tabl_Of_content', {
    icons: 'tabl_Of_content',
    init: function(editor) {
        editor.ui.addButton('TablOfContent', {
            label: 'Insert Table of Contents',
            command: 'insertTablOfContent',
            toolbar: 'insert',
            icon: 'https://iotblitz.com/public/public_page/assets/images/service-01.webp' // Custom icon URL
        });

        editor.addCommand('insertTablOfContent', {
            exec: function(editor) {
                // Insert the specified HTML content for TOC
                editor.insertHtml(
                    '<div class="highlight" id="toc"><h2>Table of Contents</h2><ul></ul></div><br>'
                );
            }
        });
    }
});

// Replace the textarea with CKEditor and configure it
CKEDITOR.replace('description_editor', {
    extraPlugins: 'tabl_Of_content',
    allowedContent: true, // Allow all content
    on: {
        instanceReady: function(ev) {
            // Handle editor instance ready event
            ev.editor.on('change', function() {
                // Get HTML content from CKEditor
                var editorData = ev.editor.getData();
                // Remove HTML tags to get plain text
                var plainText = editorData.replace(/<[^>]*>/g, '');
                // Set the plain text value to a hidden input
                document.getElementById('editorValue').value = plainText;
                console.log(plainText); // Log the plain text for debugging
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



    <script>
        $(document).ready(function() {
            // Array of example tags


            // Function to create and update tags
            function updateTags(tags) {
                $('#tagsContainer').empty();
                tags.forEach(function(tag) {
                    $('#tagsContainer').append(`<span class="badge bg-primary">${tag}</span>&nbsp;`);
                });
            }

            // Function to show similar tags in list
            function showSimilarTags(searchTerm) {
                var apiUrl = `{{ route('api.tags_serch') }}?search=${searchTerm}`;
                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var similarTags =
                            response; // Assuming response is in JSON format with data array
                        console.log(response);
                        $('#similarTagsList').empty();
                        similarTags.forEach(function(tag) {
                            $('#similarTagsList').append(
                                `<li class="list-group-item clickable">${tag.tags_name}</li>`
                            );
                        });

                        $('#similarTagsList').show(); // Show the list
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching similar tags:', error);
                    }
                });



                // var similarTags = availableTags.filter(function(tag) {
                //   return tag.includes(searchTerm) && tag !== searchTerm;
                // });

                // $('#similarTagsList').empty();
                // similarTags.forEach(function(tag) {
                //   $('#similarTagsList').append(`<li class="list-group-item clickable">${tag}</li>`);
                // });

                // // Show the list
                // $('#similarTagsList').show();
            }

            // Keyup event handler for tag input
            $('#searchTags').keyup(function() {
                var inputVal = $(this).val().trim();

                // Separate search term and show similar tags
                var searchTerms = inputVal.split(',').map(term => term.trim());
                var lastTerm = searchTerms[searchTerms.length - 1]; // Get the last term for suggestions

                updateTags(searchTerms); // Update tags container

                if (lastTerm !== '') {
                    showSimilarTags(lastTerm); // Show similar tags for the last term
                } else {
                    $('#similarTagsList').hide(); // Hide list if input is empty or only commas
                }
            });

            // Click event handler for adding tags from similarTagsList
            $(document).on('click', '#similarTagsList .clickable', function() {
                var tagToAdd = $(this).text().trim();
                var currentInput = $('#searchTags').val().trim();

                // Split current input into terms and replace last one with clicked tag
                var searchTerms = currentInput.split(',').map(term => term.trim());
                searchTerms[searchTerms.length - 1] = tagToAdd;

                // Join terms with comma and update input field
                var updatedInput = searchTerms.join(', ');
                $('#searchTags').val(updatedInput);

                updateTags(searchTerms); // Update tags container
                $('#similarTagsList').hide(); // Hide similar tags list
            });

            // Close list on click outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#similarTagsList').length && !$(e.target).is('#searchTags')) {
                    $('#similarTagsList').hide();
                }
            });
        });
    </script>

<script>
    $(document).ready(function() {

        var validator = $('#myForm').validate({
            // Define initial empty rules and messages (will be updated dynamically)
            rules: {},
            messages: {},
            // Handle form submission
            submitHandler: function(form) {
                // Form submission logic here (e.g., AJAX submission)
                form.submit();
            }
        });






         // Initialize form validation
         $('#myForm').validate({
            // Define validation rules
            rules: {
                title: {
                    required: true
                },
                description_editor: {
                    required: true
                },
                blogimage: {
                    required: true
                }
                // Add more rules as needed
            },
            // Define validation error messages
            messages: {
                title: {
                    required: "Please enter a blog title."
                },
                description_editor: {
                    required: "Please enter a blog description."
                },
                blogimage: {
                    required: "Please select a blog image."
                }
                // Add more messages as needed
            },
            // Handle form submission
             submitHandler: function(form) {
                // Form submission logic here (e.g., AJAX submission)
                form.submit();
            }
        });


        // Change form action for submit button
        $('#save').click(function(event) {
            $('#myForm').attr('action', '{{ route('super_admin.page.blog_edit', $blog_id) }}');
            // Remove required attributes from unnecessary fields
            $('#myForm input, #myForm textarea, #myForm select').removeAttr('required');
            // Add required attribute only to blog title
            $('#title').attr('required', 'required');


            validator.resetForm(); // Reset validation messages

            // Update validation rules and messages
            validator.settings.rules = {
                title: {
                    required: true
                }
                // Add more rules as needed for save button
            };
            validator.settings.messages = {
                title: {
                    required: "Please enter a blog title."
                }
                // Add more messages as needed for save button
            };

            // Remove validation rules for publish button fields
            validator.settings.rules.blogimage = {};
            validator.settings.messages.blogimage = {};

            // Update validation
            validator.resetForm();
            validator.form();

            // Prevent form submission
            event.preventDefault();
            $('#myForm').submit();


        });

        // Change form action for publish button
        $('#publish').click(function(event) {
            $('#myForm').attr('action', '{{ route('super_admin.page.blog_edit_publish', $blog_id) }}');

            $('#myForm input, #myForm textarea, #myForm select').removeAttr('required');
            // Add required attribute only to blog title
            $('#title').attr('required', 'required');


            validator.resetForm(); // Reset validation messages

            // Update validation rules and messages
            validator.settings.rules = {
                title: {
                    required: true
                }
                // Add more rules as needed for save button
            };
            validator.settings.messages = {
                title: {
                    required: "Please enter a blog title."
                }
                // Add more messages as needed for save button
            };

            // Remove validation rules for publish button fields
            validator.settings.rules.blogimage = {};
            validator.settings.messages.blogimage = {};

            // Update validation
            validator.resetForm();
            validator.form();

            // Prevent form submission
            event.preventDefault();
            $('#myForm').submit();


        });

        // Disable form submission on Enter key press
        $('#myForm').on('keydown', function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                return false;
            }
        });
    });
</script>

@endsection
