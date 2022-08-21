@extends('../layouts.main')

@section('content')

    <div class="container">
        <!-- Content
        ================================================== -->
        <div class="main-content">
            <!-- Begin Article
                ================================================== -->
            <div class="row">
                <!-- Post -->
                <div class="col-sm-8">
                    <div class="mainheading">
                        <!-- Post Categories -->
                        <div class="after-post-tags">
                            <ul class="tags">
                                <li>
                                    <a href="#">bootstrap</a>
                                </li>
                                <li>
                                    <a href="#">tutorial</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Categories -->
                        <!-- Post Title -->
                        <h1 class="posttitle">Tree of Codes</h1>
                    </div>
                    <!-- Post Featured Image -->
                    <img class="featured-image img-fluid" src="assets/public/images/3.jpg" alt="">
                    <!-- End Featured Image -->
                    <!-- Post Content -->
                    <div class="article-post">
                        <p>
                            The first mass-produced book to deviate from a rectilinear format, at least in the
                            United States, is thought to be this 1863 edition of Red Riding Hood, cut into the shape
                            of the protagonist herself with the troublesome wolf curled at her feet. Produced by the
                            Boston-based publisher Louis Prang, this is the first in their “Doll Series”, a set of
                            five “die-cut” books, known also as shape books — the other titles being Robinson
                            Crusoe, Goody Two-Shoes (also written by Red Riding Hood author Lydia Very), Cinderella,
                            and King Winter.
                        </p>
                        <p>
                            As for this particular rendition of Charles Perrault’s classic tale, the text and design
                            is by Lydia Very (1823-1901), sister of Transcendentalist poet Jones Very. The gruesome
                            ending of the original — which sees Little Red Riding Hood being gobbled up as well as
                            her grandmother — is avoided here, the gore giving way to the less bloody aims of the
                            morality tale, and the lesson that one should not disobey one’s mother.
                        </p>
                        <blockquote>
                            <p>
                                It would seem the claim could also extend to die cut books in general, as we can’t
                                find anything sooner, but do let us know in the comments if you have further light
                                to shed on this! Such books are, of course, still popular in children’s publishing
                                today, though the die cutting is not now limited to mere outlines, as evidenced in a
                                beautiful 2014 version of the same Little Red Riding Hood story.
                            </p>
                        </blockquote>
                        <p>
                            An 1868 Prang catalogue would later claim that such “books in the shape of a regular
                            paper Doll… originated with us”.
                        </p>
                        <p>
                            The die cut has also been employed in the non-juvenile sphere as well, a recent example
                            being Jonathan Safran Foer’s ambitious Tree of Codes.
                        </p>
                        <div class="clearfix">
                        </div>
                    </div>
                    <!-- Post Date -->
                    <p>
                        <small>
                            <span class="post-date"><time class="post-date" datetime="2018-01-12">12 Jan
                                    2018</time></span>
                        </small>
                    </p>
                    <!-- Prev/Next -->
                    <div class="row PageNavigation mt-4 prevnextlinks">
                        <div class="col-md-6 rightborder pl-0">
                            <a class="thepostlink" href="single.html">« Red Riding Hood</a>
                        </div>
                        <div class="col-md-6 text-right pr-0">
                            <a class="thepostlink" href="single-right-sidebar.html">We all wait for summer »</a>
                        </div>
                    </div>
                    <!-- End Prev/Next -->
                    <!-- Author Box -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <img class="author-thumb"
                                src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                alt="Sal">
                        </div>
                        <div class="col-md-10">
                            <a target="_blank" class="link-dark" href="#">Sal</a><a target="_blank"
                                href="https://twitter.com/wowthemesnet" class="btn follow">Follow</a>
                            <span class="author-description">Author of Affiliates, a template available for
                                WordPress, HTML, Ghost and Jekyll. You are currently previewing Jekyll template
                                demo.</span>
                        </div>
                    </div>
                    <!-- Begin Comments
                        ================================================== -->
                    <section>
                        <div id="comments">
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
                                    Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments
                                        powered by Disqus.</a>
                                </noscript>
                            </section>
                        </div>
                    </section>
                    <!--End Comments
                        ================================================== -->
                </div>
                <!-- End Post -->

                <!-- Sidebar -->
                <div class="col-sm-4">
                    <div class="sidebar-right">
                        <div class="sidebar">
                            <div class="sidebar-section">
                                <h5><span>Newsletter</span></h5>
                                <!-- Go to your Mailchimp account/Lists/Sign Up Forms/Embedded forms and replace the code below with your own  -->
                                <!-- Begin MailChimp Signup Form -->
                                <link href="https://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet"
                                    type="text/css">
                                <div id="mc_embed_signup">
                                    <form
                                        action="https://wowthemes.us11.list-manage.com/subscribe/post?u=8aeb20a530e124561927d3bd8&amp;id=8c3d2d214b"
                                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                        class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <h2>Sign up to get our weekly free guide to selling digital downloads
                                            </h2>
                                            <div class="mc-field-group">
                                                <input type="email" value="" name="EMAIL" class="required email"
                                                    id="mce-EMAIL" placeholder="E-mail Address">
                                            </div>
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none">
                                                </div>
                                                <div class="response" id="mce-success-response" style="display:none">
                                                </div>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                <input type="text" name="b_8aeb20a530e124561927d3bd8_8c3d2d214b"
                                                    tabindex="-1" value="">
                                            </div>
                                            <div class="clear">
                                                <input type="submit" value="Subscribe" name="subscribe"
                                                    id="mc-embedded-subscribe" class="button">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                                <script type='text/javascript'>
                                    (function($) {
                                        window.fnames = new Array();
                                        window.ftypes = new Array();
                                        fnames[0] = 'EMAIL';
                                        ftypes[0] = 'email';
                                        fnames[3] = 'MMERGE3';
                                        ftypes[3] = 'text';
                                        fnames[1] = 'MMERGE1';
                                        ftypes[1] = 'text';
                                        fnames[2] = 'MMERGE2';
                                        ftypes[2] = 'text';
                                        fnames[4] = 'MMERGE4';
                                        ftypes[4] = 'text';
                                        fnames[5] = 'MMERGE5';
                                        ftypes[5] = 'text';
                                    }(jQuery));
                                    var $mcj = jQuery.noConflict(true);
                                </script>
                                <!--End mc_embed_signup-->
                            </div>
                            <div class="sidebar-section">
                                <h5><span>Useful</span></h5>
                                <ul style="list-none;">
                                    <li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47">Digital Ocean</a>
                                    </li>
                                    <li><a target="blank"
                                            href="https://www.cloudways.com/en/pricing.php?id=153986&amp;a_bid=005da123">Cloudways</a>
                                    </li>
                                    <li><a target="blank"
                                            href="http://shareasale.com/r.cfm?b=875645&amp;u=1087935&amp;m=41388&amp;urllink=&amp;afftrack=">Page
                                            Speed Test</a></li>
                                    <li><a target="blank" href="https://elementor.com/?ref=1556">Elementor Page
                                            Builder</a></li>
                                    <li><a target="blank" href="https://www.wowthemes.net/category/jekyll-themes/">Our
                                            Jekyll
                                            Themes</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-section">
                                <h5><span>Recommended</span></h5>
                                <a href="https://easydigitaldownloads.com/?ref=2135"
                                    title="Sell digital downloads with WordPress, for free"><img
                                        src="https://easydigitaldownloads.com/wp-content/uploads/2015/02/300x250-2.png"
                                        alt="Sell digital downloads with WordPress, for free"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->

            </div>
            <!-- End Article
                ================================================== -->
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

@endsection