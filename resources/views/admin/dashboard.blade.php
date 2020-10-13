<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>The Event Planner</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }} ">
	<!-- Site CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }} ">
	<link rel="stylesheet" href="{{ asset('css/viewevents.css') }} ">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }} ">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


	<!-- //Custom Theme files -->

	<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }} ">
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }} ">







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

	@include('includes.adminav')

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{ asset('images/slider-01.jpg') }});">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>Flavour Events</h1>

								<p><strong>Let us be the one to make your day special</strong></p>

							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url({{ asset('images/slider-02.jpg') }});">
						<div class="lbox-caption">
							<div class="lbox-details">
							<h1>Flavour Events</h1>
								<p><strong>We make things happen</strong></p>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url({{ asset('images/slider-03.jpg') }});">
						<div class="lbox-caption">
							<div class="lbox-details">
							<h1>Flavour Events</h1>
								<p><strong>Let us be the one to make your day special</strong></p>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About <span>Us</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> Welcome to <span>Flavour Events</span></h2>
								<p>From small intimate gatherings to large and lavish affairs, our weddings and parties are
									memorable, magical experiences, perfectly planned and beautifully executed. </p>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
								<div class="video-wrap">
								<a href="http://example.com/">
								<div class="play-btn"></div>
								<img class="img-fluid rounded" src="{{ asset('images/about-img-01.jpg') }}">
						</a>
								</div>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">

							</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->

<div class="col-lg-12">
    <div class="title-box">
        <h2><span>Manage Events</span></h2>
    </div>
</div>



    <table class="table">

        <thead>
          <tr>

            <th scope="col">Name</th>
            <th scope="col">People</th>
			<th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
         @foreach ($events as $event)
			<td>{{$event->name}}</td>

			<td>
				@foreach ($event->clients as $client)
				{{$client->name}} <br>
				@endforeach
			</td>

			<td>{{$event->type}}</td>
            <td> <button class="btn1"> <a href="show/{{$event->id}}" style="color: #000">View</button></a>
           <button class="btn2"> <a href="" style="color: #000" >Delete</button></a> </td>
          </tr>
         @endforeach
        </tbody>
      </table>








<!-- ALL JS FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
	<script src="{{ asset('js/slider-index.js') }}"></script>
	<script src="{{ asset('js/smoothscroll.js') }}"></script>
	<script src="{{ asset('js/form-validator.min.js') }}"></script>
    <script src="{{ asset('js/contact-form-script.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>






