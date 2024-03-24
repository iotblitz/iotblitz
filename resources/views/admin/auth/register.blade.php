<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('admin_page') }}/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('admin_page') }}/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <img src="{{ asset('admin_page') }}/assets/images/" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Signin</h4>
                            <form action="{{route('admin.register')}}" method="post" id="myForm">
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
                                <button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                                <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Js -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('admin_page') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('admin_page') }}/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('admin_page') }}/assets/js/ripple.js"></script>
    <script src="{{ asset('admin_page') }}/assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myForm").validate({
                rules: {
                    name: "required",
                    email: "required",
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    name:"Please enter your name",
                    email: "Please enter your email address",
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long"
                    }
                }
            });
        });
    </script>
</body>

</html>
