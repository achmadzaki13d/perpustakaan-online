
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App css -->
        <link href="{{ asset('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('template/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Login</h4>
                                    <p class="text-muted mb-4">Selamat Datang</p>
                                </div>

                                <form action="{{route('login-post')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div> -->

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" type="submit">LogIn</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                            <div class="col-12 text-center">
                                <p class="text-muted">Belum punya akun? <a href="{{route('register')}}" class="text-primary ms-1"><b>Daftar</b></a></p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- bundle -->
        <script src="{{ asset('template/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/app.min.js') }}"></script>
        
    </body>
</html>
