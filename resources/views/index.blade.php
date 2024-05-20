<!DOCTYPE html>
<html lang="en">
<head>
    <title>DevBook - Bootstrap 5 Book/eBook Landing Page Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('/css/fontawesome/js/all.min.js')}}"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('/css/theme.css')}}">

</head>

<body>
    <header class="header">
        <div class="branding">
            <div class="container-fluid position-relative py-3">
                <div class="logo-wrapper">
	                <div class="site-logo"><a class="navbar-brand" href="#"><img class="logo-icon me-2" src="{{asset('css/images/book.png')}}" alt="logo" ><span class="logo-text">Bibliotheque De Sasa</span></a></div>
                </div><!--//docs-logo-wrapper-->

            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->

    <section class="hero-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
				    <div class="promo pe-md-3 pe-lg-5">
					    <h1 class="headline mb-3">
						    Welcome to <br>Bibliotheque De Sasa!
					    </h1><!--//headline-->
					    <div class="subheadline mb-4">
						    Are you in search of a great book to dive into? Discover your next favorite read at Bibliotheque De Sasa!

					    </div><!--//subheading-->

					    <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
						    <div class="col-12 col-md-auto">
						        <a class="btn btn-primary w-100" onclick="document.location.href = '/registration'">Sign Up</a>
						    </div>
						    <div class="col-12 col-md-auto">
						        <a class="btn btn-secondary scrollto w-100" onclick="document.location.href = '/login'">Sign In</a>
						    </div>
					    </div><!--//cta-holder-->

					    <div class="hero-quotes mt-5">
						    <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="8000">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#quotes-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#quotes-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#quotes-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
								</div>

							    <div class="carousel-inner">
								    <div class="carousel-item active">
								        <blockquote class="quote p-4 theme-bg-light">
									        "Excellent Book! Add your book reviews here consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor. Praesent mauris neque, viverra quis erat vitae, auctor imperdiet nisi."
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{asset('css/images/profile/trisha.jpg')}}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">Trisha Ganza</div>
										        <div class="soure-title">Developer of Glitzy Hoops</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								    <div class="carousel-item">
								        <blockquote class="quote p-4 theme-bg-light">
									        "Highly recommended consectetur adipiscing elit. Proin et auctor dolor, sed venenatis massa. Vestibulum ullamcorper lobortis nisi non placerat praesent mauris neque"
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{asset('css/images/profile/marielle.jpg')}}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">Marielle Dela Crus</div>
										        <div class="soure-title">Developer of Quirk 'n Quill</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								    <div class="carousel-item">
								        <blockquote class="quote p-4 theme-bg-light">
									        "Awesome! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor. Praesent mauris neque, viverra quis erat vitae."
								        </blockquote><!--//item-->
								        <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
									        <div class="col-12 col-md-auto text-center text-md-start">
									            <img class="source-profile" src="{{asset('css/images/profile/jessa.jpg')}}" alt="image" >
									        </div><!--//col-->
									        <div class="col source-info text-center text-md-start">
										        <div class="source-name">Jessalyn Aluste</div>
										        <div class="soure-title">Developer of J.A's Artful Flowers</div>
										    </div><!--//col-->
								        </div><!--//source-->
								    </div><!--//carousel-item-->
								</div><!--//carousel-inner-->
							</div><!--//quotes-carousel-->

					    </div><!--//hero-quotes-->
				    </div><!--//promo-->
			    </div><!--col-->
			    <div class="col-12 col-md-5 mb-5 align-self-center">
				    <div class="book-cover-holder">
					    <img class="img-fluid book-cover" src="{{asset('css/images/powerless.jpg')}}" alt="book cover" >
					    <div class="book-badge d-inline-block shadow">
						    New<br>Arrivals
					    </div>
				    </div><!--//book-cover-holder-->
			    </div><!--col-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//hero-section-->


    <footer class="footer">

	    <div class="footer-bottom text-center py-5">

	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="https://github.com/aVeryTinySoapy" target="_blank">Gwyn Rois Sanchez</a></small>

	    </div>

    </footer>

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/smoothscroll.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>
</html>

