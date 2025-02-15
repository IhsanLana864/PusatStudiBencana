<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login - Pusat Studi Bencana IPB UNIVERSITY</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/login/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/login/login_icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/login/login_style.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">


    </head>
    <body>









    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <div class="text-center">
                    <a href="/login" class="logo logo-admin"><img src="assets/images/Logo-psb1.png" height="20" alt="logo"></a>
                </div>

                <div class="px-3 pb-3">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="text" name="username" required placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <input class="form-control" type="password" name="password" required placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>



                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                {{-- <a href="/login/recovery" class="text-muted"><i class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a> --}}
                            </div>
                            {{-- <div class="col-sm-5 m-t-20">
                            <a href="{{ route('register') }}" class="text-muted">
                                <i class="mdi mdi-account-circle"></i>
                                <small>Create an account?</small>
                            </a> --}}
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
