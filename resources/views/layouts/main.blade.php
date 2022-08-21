

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/public/images/favicon.ico">
    <title>Affiliates | HTML Bootstrap Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
        integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="assets/public/css/theme.css" rel="stylesheet">
    <!-- Begin tracking codes here, including ShareThis/Analytics -->

    <!-- End tracking codes here, including ShareThis/Analytics -->
</head>

<body class="layout-default">
    <!-- Begin Menu Navigation
        ================================================== -->
    <header class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsWow" aria-controls="navbarsWow" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href={{ route('home') }}>
                <img src="assets/public/images/logo.png" alt="Affiliates - Free Bootstrap Template">
            </a>
            <!-- End Logo -->
            <!-- Begin Menu -->
            <div class="collapse navbar-collapse" id="navbarsWow">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public_posts') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('contact') }}>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
                <!-- End Menu -->
            </div>
        </div>
    </header>
    <div class="site-content">

        @yield('content')

        <!-- Begin Footer
        ================================================== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="footer-widget">
                            <a href="contact.html">
                                <img src="assets/public/images/logo-footer.png" alt="logo footer">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-widget">
                            <h5 class="title">Resources</h5>
                            <ul>
                                <li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47">Digital Ocean</a></li>
                                <li><a target="blank"
                                        href="https://www.cloudways.com/en/pricing.php?id=153986&amp;a_bid=005da123">Cloudways</a>
                                </li>
                                <li><a target="blank"
                                        href="https://shareasale.com/r.cfm?b=875645&amp;u=1087935&amp;m=41388&amp;urllink=&amp;afftrack=">Page
                                        Speed Test</a></li>
                                <li><a target="blank" href="https://elementor.com/?ref=1556">Elementor Page Builder</a>
                                </li>
                                <li><a target="blank" href="https://www.wowthemes.net/category/freebies/">Our Free
                                        Themes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-widget">
                            <h5 class="title">Author</h5>
                            <ul>
                                <li><a href="https://www.wowthemes.net/premium-themes-templates/">About Us</a></li>
                                <li><a target="_blank" href="https://www.wowthemes.net/affiliate-area/">Affiliates</a>
                                </li>
                                <li><a href="https://www.wowthemes.net/terms-and-conditions/">License</a></li>
                                <li><a href="https://www.wowthemes.net/blog/">Blog</a></li>
                                <li><a href="https://www.wowthemes.net/support/">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="footer-widget textwidget">
                            <h5 class="title">Download</h5>
                            <p>
                                Download "Affiliates" theme and use it for your next project. If you have a question, a
                                bug report, or if you simply want to say hi, <a
                                    href="https://www.wowthemes.net/support/">contact us here</a>.
                            </p>
                            <a href="https://gum.co/affiliates-html-template" target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p class="pull-left">
                        Copyright © 2018 Affiliates HTMT Template
                    </p>
                    <p class="pull-right">
                        <!-- Leave credit to author unless you own a commercial license: https://www.wowthemes.net/freebies-license/ -->
                        <a target="_blank"
                            href="https://www.wowthemes.net/affiliates-free-bootstrap-template/">"Affiliates
                            Template"</a> - Design & Code by WowThemes.net
                    </p>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer
            ================================================== -->
    </div>


    <!-- JavaScript
    ================================================== -->
    <script src="assets/public/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
    </script>
    <script src="assets/public/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/public/js/masonry.pkgd.min.js"></script>
    <script src="assets/public/js/theme.js"></script>
</body>

</html>
