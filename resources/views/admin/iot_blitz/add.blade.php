@extends('admin.common.layout')
@section('admin_page_content')
    <style>
        /* Some additional styling */
        .badge-container {
            display: inline-block;
            margin-right: 5px;
            /* Adjust as needed */
        }

        .list-group-item {
            margin: 0.5px;
            background-color: rgb(89, 89, 89);
            color: white;
        }


        .highlight {
            background-color: yellow;
            padding: 50px;
        }
    </style>



    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">New Blog</h5>
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
            <form method="POST" action="{{ route('super_admin.page.blog_add') }}" enctype="multipart/form-data">
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
                                                    <input type="text" class="form-control" id="title"
                                                        aria-describedby="titleHelp" name="title">
                                                </div>
                                            </div>



                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile"
                                                        name="blogimage" required="">
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose
                                                        file...</label>
                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="floating-label" for="fimagealttxt">Featured Image Alt
                                                        Text</label>
                                                    <input type="text" class="form-control" id="fimagealttxt"
                                                        name="fimagealttxt">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="imagedescriotion">Image
                                                        Description</label>
                                                    <input type="text" class="form-control" id="imagedescriotion"
                                                        name="imagedescriotion">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="imageCaption">Image caption</label>
                                                    <input type="text" class="form-control" id="imageCaption"
                                                        name="imageCaption">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="imageTitle">Image title</label>
                                                    <input type="text" class="form-control" id="imageTitle"
                                                        name="imageTitle">
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <textarea name="description_editor" placeholder="description" class="form-control" rows="12" cols="50"></textarea>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="mataTitle">Meta title</label>
                                                    <input type="text" class="form-control" id="mataTitle"
                                                        name="mataTitle">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="metaDescriptions">Meta
                                                        descriptions</label>
                                                    <input type="text" class="form-control" id="metaDescriptions"
                                                        name="metaDescriptions">
                                                </div>
                                            </div>


                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="floating-label" for="focusKeyword ">Focus Keyword
                                                    </label>
                                                    <input type="text" class="form-control" id="focusKeyword"
                                                        name="focusKeyword">
                                                </div>
                                            </div>





                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="floating-label" for="inputWithBadges">Secondary
                                                        Keywords</label>
                                                    <input type="text" class="form-control" id="inputWithBadges"
                                                        placeholder="" name="keyword">
                                                    <div id="badgeContainer"></div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="floating-label" for="blogExcerpt">Blog Excerpt</label>
                                                    <input type="text" class="form-control" id="blogExcerpt"
                                                        name="blogExcerpt" maxlength="205">
                                                </div>
                                            </div>



                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="searchTags" class="floating-label">Search Tags:</label>
                                                    <input type="text" class="form-control" id="searchTags"
                                                        name="searchTags">
                                                    <ul class="list-group mt-3" id="similarTagsList">
                                                        <!-- Similar tags will be inserted here dynamically -->
                                                    </ul>
                                                    <div id="tagsContainer">
                                                        <!-- Tags will be inserted here dynamically -->
                                                    </div>
                                                </div>
                                            </div>





                                            <input type="hidden" id="editorValue" name="text_description"
                                                value="">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">

                        <div class="card">
                            <div class="card-body">
                                <div class="img">
                                    <img id="previewImage" src="" class="img-fluid" alt="Preview Image">
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
                            // Insert the specified HTML content
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
@endsection
