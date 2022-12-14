<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/dashboard/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/dashboard/img/favicon.png">
  <title>
   CAMADO
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href={{ asset("assets/dashboard/css/nucleo-icons.css") }} rel="stylesheet" />
  <link href={{ asset("assets/dashboard/css/nucleo-svg.css") }} rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href={{ asset("assets/dashboard/css/material-dashboard.css?v=3.0.4") }} rel="stylesheet" />
</head>
  <body class="bg-gray-200">
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <nav
                        class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                        <div class="container-fluid ps-2 pe-0">
                            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href={{ route("Home") }}>
                               CAMADO
                            </a>
                            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navigation">
                                <ul class="navbar-nav mx-auto">
                                </ul>
                                <ul class="navbar-nav d-lg-block d-none">
                                    <li class="nav-item">
                                        <a href={{ route("Home") }}
                                            class="btn btn-sm mb-0 me-1 bg-gradient-dark">Home</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
@yield('content')


<!--   Core JS Files   -->
  <script src={{ asset("assets/dashboard/js/core/popper.min.js") }}></script>
  <script src={{ asset("assets/dashboard/js/core/bootstrap.min.js") }}></script>
  <script src={{ asset("assets/dashboard/js/plugins/perfect-scrollbar.min.js") }}></script>
  <script src={{ asset("assets/dashboard/js/plugins/smooth-scrollbar.min.js") }}></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/dashboard/js/material-dashboard.min.js?v=3.0.4"></script>
</body>
