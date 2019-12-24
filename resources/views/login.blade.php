<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        XT Radio
    </title>
    <!-- Favicon -->
    <link href="/favicon.ico" rel="icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="/assets/css/nucleo.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4825da062f.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="/assets/css/argon-dashboard.min.css" rel="stylesheet" />
</head>

<body class="bg-default">
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container px-4">
            <a class="navbar-brand" href="/admin">
                <img src="/assets/images/xt-logo.png" class="navbar-brand-img" alt="XT Radio">
                XT Radio
            </a>
        </div>
    </nav>
    <!-- Page content -->
    <div class="container pb-5 py-7">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Sign in to XT Radio</small>
                        </div>
                        @if(\Session::has('alert'))
                            <div class="alert alert-danger" role="alert">
                                <strong>Perhatian!</strong> {{Session::get('alert')}}
                            </div>
                        @endif

                        <form role="form" method="POST" action="">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="copyright text-center text-muted">
                        &copy; {{date('Y')}} <a href="/" class="font-weight-bold ml-1" target="_blank">XT Radio Digital Division</a><br/>Created using <a href="https://demos.creative-tim.com/argon-dashboard/index.html" target="_blank">Argon Dashboard</a> templates
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/argon-dashboard.min.js"></script>
</body>

</html>