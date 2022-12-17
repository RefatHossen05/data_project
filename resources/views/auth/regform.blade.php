<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>Registation - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="{{url('backend/assets/img/favicon.png')}}" rel="icon" />
        <link href="{{url('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{url('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
        <link href="{{url('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="{{url('backend/assets/css/style.css')}}" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
        <section class="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-5">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="" />
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div>
                        <!-- End Logo -->

                        <div class="card mb-3">
                            <div class="container">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            @if ($message = session()->get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form action="{{route('regsubmit')}}" class="row g-3 needs-validation" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="yourName" />
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" />
                                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="yourUsername" />
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" />
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="credits text-center">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{url('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/quill/quill.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
        <script src="{{url('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{url('backend/assets/vendor/php-email-form/validate.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{url('backend/assets/js/main.js')}}"></script>
    </body>
</html>