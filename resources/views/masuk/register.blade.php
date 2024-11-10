<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register - Pusat Studi Bencana IPB</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/login/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/login/login_icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/login/login_style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                        <a href="/index" class="logo logo-admin"><img src="assets/images/logo.png" height="20" alt="logo"></a>
                    </div>

                    <div class="p-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label font-weight-normal" for="customCheck1">
                                        I accept <a href="#" class="text-muted">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>
                    </form>


                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="/login" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="assets/js/login/jquery.min.js"></script>
        <script src="assets/js/login/popper.min.js"></script>
        <script src="assets/js/login/bootstrap.min.js"></script>
        <script src="assets/js/login/modernizr.min.js"></script>
        <script src="assets/js/login/detect.js"></script>
        <script src="assets/js/login/fastclick.js"></script>
        <script src="assets/js/login/jquery.blockUI.js"></script>
        <script src="assets/js/login/waves.js"></script>
        <script src="assets/js/login/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/login/app.js"></script>

    </body>
</html>
