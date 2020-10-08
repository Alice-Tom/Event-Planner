<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Flavour Events</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link href="{{ asset('asset/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
	<link href="{{ asset('asset/css/style.css') }}" type="text/css" rel="stylesheet" media="all">

	<link href="{{ asset('asset/css/font-awesome.css') }}" rel="stylesheet">   <!-- font-awesome icons -->
	<link rel="stylesheet" href="{{ asset('css/swipebox.css') }}">

	<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<!-- //Custom Theme files -->

	<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}">
	<!-- Site CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="css/style.css">
=======
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
    <div id="preloader">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loader">
						<div class="loading loader-inner-4"></div>
						<div class="loading loader-inner-3"></div>
						<div class="loading loader-inner-2"></div>
						<div class="loading loader-inner-1"></div>
					</div>
				</div>
			</div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

		<div class="banner_content text-center">
<<<<<<< HEAD
			<img class="head1" src="images/shap1.jpg" alt="">
				<h1>yo</h1>
					<img class="head" src="images/shap2.jpg" alt="">
=======
			<img class="head" src="{{ asset('images/unnamed.png') }}" alt="">
			<h1>{{$event->name}}</h1>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
		</div>

	<!-- Start Banner -->
<<<<<<< HEAD
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>Flavour Events</h1>

								<p><strong>Let us be the one to make your day special</strong></p>
								<a href="" class="btn ">Contact</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
							<h1>Flavour Events</h1>

								<p><strong>We make things happen</strong></p>
								<a href="#" class="btn ">Contact</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
							<h1>Flavour Events</h1>

								<p><strong>Let us be the one to make your day special</strong></p>
								<a href="#" class="btn">Contact</a>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
=======
	<div class="dp">
		<img class="banner" src="{{ $event->urls}}" alt="">
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
	</div>
	<!-- End Banner -->

	<!-- portfolio -->
	<div id="portfolio" class="services portfolio">
		<div class="container">
			<div class="col-lg-12">
				<div class="title-box">
					<h2><span>Gallery</span></h2>
				</div>
			</div>
			<div class="gallery_gds">
				<ul class="simplefilter">
					<li class="active" data-filter="all">ALL</li>
					<li data-filter="1">VIDEOS</li>
					<li data-filter="2">PICTURES</li>
				</ul>
				<div class="filtr-container">
<<<<<<< HEAD
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="images/g1.jpg" download title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
						 <img src="images/g1.jpg" alt=""  />
								<div class="wthree-pcatn">
									<h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Luminous night">
						<div class="agileits-img">
							<a href="images/g2.jpg" downlaod title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g2.jpg" alt=""  />
								<div class="wthree-pcatn">
                                <h4>downlaod</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="City wonders">
						<div class="agileits-img">
							<a href="images/g3.jpg" download title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g3.jpg" alt="" />
								<div class="wthree-pcatn">
                                <h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="Industrial site">
						<div class="agileits-img">
							<a href="images/g4.jpg" download title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
								<img src="images/g4.jpg" alt=""  />
								<div class="wthree-pcatn">
                                <h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="3" data-sort="In production">
						<div class="agileits-img">
							<a href="images/g5.jpg" download title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g5.jpg" alt="" />
								<div class="wthree-pcatn">
								<h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="images/g6.jpg" download title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="images/g6.jpg" alt="" class="img-responsive" />
								<div class="wthree-pcatn">
								<h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="1" data-sort="Peaceful lake">
=======

					@foreach ($event->media as $media)
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Busy streets">
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
						<div class="agileits-img">
							<a href="{{ $media->urls }}" download >
								<img src="{{ $media->urls }}" alt=""  />
								<div class="wthree-pcatn">
<<<<<<< HEAD
								<h4>download</h4>
								</div>
							</a>
=======
									<h4>Download</h4>
								</div>
							</a>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
						</div>
					</div>
					@endforeach

					@foreach ($event->media as $media)
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Busy streets">
						<div class="agileits-img">
							<a href="{{ $media->type }}" download title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
								<img src="{{ $media->type }}" alt=""  />
								<div class="wthree-pcatn">
<<<<<<< HEAD
                                <h4>download</h4>
								</div>
							</a>
=======
									<h4>Our Portfolio</h4>
								</div>
							</a>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
						</div>
					</div>
					@endforeach

				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->

					{{-- @foreach ($event->media as $media)
					<div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="{{ $media->type }}" data-sort="Peaceful lake">
						<div class="agileits-img">
							<a href="{{ $media->urls }}" download title="Ac lobortis justo rutrum quis. Praesent non purus fermentum, duis maximus tortor diam, eleifend velit non">
								<img src="{{ $media->urls }}" alt="" class="img-responsive"/>
								<div class="wthree-pcatn">
								<h4>download</h4>
								</div>
							</a>
						</div>
					</div>
					@endforeach --}}
				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- end portfolio -->

	@include('includes.footer')

	<!-- ALL JS FILES -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
<<<<<<< HEAD
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>

	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
=======
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/slider-index.js') }}"></script>
	<script src="{{ asset('js/smoothscroll.js') }}"></script>
	<script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>

	<!-- js -->
	<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
	<!-- //js -->

	<script>
		$(document).ready(function () {
			let media = {!! json_encode($event->media ?? array()) !!}
			let preloaded = media.map( media => {
				return {
					id : media.id,
					src : media.urls
				}
			});
	</script>

	<!-- Kick off Filterizr -->
<<<<<<< HEAD
	<script src="js/jquery.filterizr.js"></script>
	<script src="js/controls.js"></script>
=======
	<script src="{{ asset('js/jquery.filterizr.js') }}"></script>
	<script src="{{ asset('js/controls.js') }}"></script>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
	<script type="text/javascript">
		$(function() {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>
	<!-- swipe box js -->
<<<<<<< HEAD
	<script src="js/jquery.swipebox.min.js"></script>
=======
	<script src="{{ asset('js/jquery.swipebox.min.js') }}"></script>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js -->
	<!-- start-smooth-scrolling -->
<<<<<<< HEAD
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
=======
	<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
<<<<<<< HEAD
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>


=======
	<!-- smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('js/bootstrap.js') }}"></script>


>>>>>>> 3842fe13c47c026d8bcc2a13c62e36352a9b69a5
</body>
</html>
