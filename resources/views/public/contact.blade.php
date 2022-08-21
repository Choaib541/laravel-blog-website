@extends('../layouts.main')


@section('content')
	

<div class="container">
    <!-- Content (replace with your e-mail address below)
    ================================================== -->
    <div class="main-content">
        <section>
            <div class="section-title">
                <h2><span>Contact</span></h2>
            </div>
            <div class="article-post">
                <form action="https://formspree.io/wowthemesnet@gmail.com" method="POST">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail Address">
                        </div>
                    </div>
                    <textarea rows="8" class="form-control mb-3" name="message" placeholder="Message"></textarea>
                    <input class="btn btn-success" type="submit" value="Send">
                </form>
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

@endsection
