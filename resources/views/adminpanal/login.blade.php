<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="adminpanals/css/font-face.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="adminpanals/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="adminpanals/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="adminpanals/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="adminpanals//css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            {{Config::get('constants.site_name')}}
                            <a href="#">
                                
                                <img src="adminpanals//images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{route('adminpanal.auth')}}" method="post">

                                @csrf

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                              
                               @if(session()->has('error'))
                               <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                   {{session('error')}}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">×</span>
                                   </button>
                               </div>
                               @endif
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('adminpanals/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('adminpanals/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('adminpanals/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('adminpanals/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('adminpanals/vendor/animsition/animsition.min.js')}}"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('adminpanals/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="adminpanals/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('adminpanals/vendor/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('adminpanals/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('adminpanals/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="adminpanals/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="adminpanals//js/main.js"></script>

</body>

</html>
<!-- end document-->
