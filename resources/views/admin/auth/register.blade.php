@extends('admin.common.layout')
@section('admin_page_content')








<!-- [ breadcrumb ] start -->
<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h5>Register</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('employee.register')}}" method="post" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="floating-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" autocomplete="off" name="name" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="floating-label" for="email">Email address</label>
                                <input type="text" class="form-control" id="email" placeholder="" autocomplete="off" name="email" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="floating-label" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="" autocomplete="off" required>
                            </div>

                            <div class="form-group mb-4">
                                <label class="floating-label" for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="" autocomplete="off" required>
                            </div>
                            <div class="form-group mb-4">
                                {{-- <label for="exampleFormControlSelect1">Role</label> --}}
                                <select class="form-control" id="role" name="role" required>
                                    <option value="" selected>Select Role</option>
                                    <option value="C">Content Writer</option>
                                    <option value="E">Employee</option>
                                    <option value="M">Manager</option>
                                    <option value="AD">Admin</option>
                                    <option value="SA">Super Admin</option>
                                </select>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                <input type="file" class="custom-file-input" id="validatedCustomFile"
                                    name="blogimage" required="">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Submit</button>
                        </form>
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




        </div>
        <!-- [ Main Content ] end -->







@endsection
@section('admin_page_script')

<script>

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
