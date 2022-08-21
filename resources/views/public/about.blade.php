@extends('../layouts.main')

@section('content')
	

<div class="container">
    <!-- Content
    ================================================== -->
    <div class="main-content">
        <section>
            <div class="section-title">
                <h2><span>About</span></h2>
            </div>
            <div class="article-post">
                <p>
                    This website is built with “Affiliates” (a free Bootstrap Template designed &amp; developed
                    by WowThemes.net). It is meant for demonstration purposes, so you can have an idea of how
                    this theme looks in action so no real content can be found. This page in example shows a
                    page layout.
                </p>
                <p>
                    <strong>License &amp; Download</strong>
                </p>
                <p>
                    Affiliates HTML Bootstrap template is designed and developed by WowThemes.net and it is
                    <em>free</em> for personal use.
                </p>
                <p>
                    <a href="https://gum.co/affiliates-html-template" target="_blank">Download Template</a>
                </p>
                <p>
                    <img src="assets/public/images/theme.jpg" alt="affiliates free bootstrap template" />
                </p>
            </div>
            <div id="comments" class="row mb-5">
                <div class="col-md-8">
                    <section class="disqus">
                        <div id="disqus_thread">
                        </div>
                        <script type="text/javascript">
                            var disqus_shortname = 'demowebsite';
                            var disqus_developer = 0;
                            (function() {
                                var dsq = document.createElement('script');
                                dsq.type = 'text/javascript';
                                dsq.async = true;
                                dsq.src = window.location.protocol + '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>
                            Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a>
                        </noscript>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- /.container -->
<!-- Before Footer
    ================================================== -->
<div class="beforefooter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>This is your final call to action area. Shine like a star, make them want you, tell 'em to
                    push that button!</h3>
                <p>
                    We offer a <span>30 Day Money Back Guarantee</span>, so joining is Risk-Free!
                </p>
                <a class="btn btn-primary btn-lg" href="#">Join us yesterday</a>
            </div>
            <div class="col-md-4 text-right footersocial">
                <h5>Connect with Us</h5>
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-google"></i>
                <i class="fa fa-pinterest"></i>
                <i class="fa fa-github"></i>
            </div>
        </div>
    </div>
</div>
<!-- Begin Footer
    ================================================== -->


@endsection
