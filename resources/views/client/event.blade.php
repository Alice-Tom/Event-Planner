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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- LOADER -->
    {{-- <div id="preloader">
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
    </div><!-- end loader --> --}}
    <!-- END LOADER -->

		<div class="banner_content text-center">
            <img class="head" src="{{ asset('images/shap1.jpg') }}" alt="">
                <h1>{{$event->name}}</h1>
             <img class="head2" src="{{ asset('images/shap2.jpg') }}" alt="">

		</div>

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
                    @foreach ($event->getMedia('dp-'.$event->token) as $event_images)
                        <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{ $event_images->getUrl() }});">
                            <div class="lbox-caption">
                                <div class="lbox-details">
                                    <p><strong>Let us be the one to make your day special</strong></p>
                                    <a href="" class="btn ">Contact</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{ $event_images->getUrl() }});">
                            <div class="lbox-caption">
                                <div class="lbox-details">
                                    <p><strong>Let us be the one to make your day special</strong></p>
                                    <a href="" class="btn ">Contact</a>
                                </div>
                            </div>
                        </div> --}}
				</div><!-- .pogoSlider -->
			</div>
		</div>
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
					<li> <a href="" id="download_all">DOWNLOAD ALL</a> </li>
                    <li> <a href="{{ route('client.event.media.download.all.zip', $event->id ) }}" id="download_zip">DOWNLOAD ZIP</a> </li>
				</ul>
				<div class="filtr-container">
                    @foreach ($event->getMedia($event->token) as $event_images)
                        <div class="col-md-4 col-sm-4 col-xs-6 filtr-item" data-category="2" data-sort="Luminous night">
                            <div class="agileits-img">
                                {{ $event_images('image_preview') }}
                                <a href="" class="wthree-pcatn" data-media="{{ $event_images->id }}" data-name="{{ $event_images->file_name }}" >
                                    <h4>downlaod</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach

				   <div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- end portfolio -->

	@include('includes.footer')

	<!-- ALL JS FILES -->
	{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>

    <!-- ALL PLUGINS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
	<script src="{{ asset('js/slider-index.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- // Kick off Filterizr -->
	<script src="{{ asset('js/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('js/controls.js') }}"></script>

	<!-- // start-smooth-scrolling -->
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

	<!-- // Bootstrap core JavaScript
    // ==================================================
    // Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- Axios --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function () {
            $('.filtr-container').filterizr();

			$().UItoTop({ easingType: 'easeOutQuart' });

            let event = {!! json_encode($event->media) !!}

            $('#download_all').on('click', (e) => {
                e.preventDefault();

                event.map(media => {
                    let url = `/event/media/download-single/${media.id}`;
                    axios.get(url, {
                        responseType: "blob",
                    }).then( response => {
                        const url = window.URL.createObjectURL(new Blob([response.data]));
                        const link = document.createElement("a");
                        link.href = url;
                        link.setAttribute("download", `${media.file_name}`);
                        document.body.appendChild(link);
                        link.click();
                    })
                }).catch (error => {
                    console.log(error)
                })
            })

            $('.wthree-pcatn').on('click', function(e) {
                e.preventDefault()

                let media = $(this).data('media');
                let file_name = $(this).data('name');

                let url = `/event/media/download-single/${media}`;
                axios.get(url, {
                    responseType: "blob",
                }).then( response => {
                    const url = window.URL.createObjectURL(new Blob([response.data]));
                    const link = document.createElement("a");
                    link.href = url;
                    link.setAttribute("download", `${file_name}`);
                    document.body.appendChild(link);
                    link.click();
                }).catch (error => {
                    console.log(error)
                })
            })
        })
	</script>
</body>
</html>
