<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>The Event Planner</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="uploads/css/nunito-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="uploads/css/style.css"/>
	

	<meta
	name="description"
	content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads."
  />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap styles -->
  <!-- <link
	rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous"
  /> -->
  <!-- Generic page styles -->
  <style>
	#navigation {
	  margin: 10px 0;
	}
	@media (max-width: 767px) {
	  #title,
	  #description {
		display: none;
	  }
	}
  </style>
  <!-- blueimp Gallery styles -->
  <!-- <link
	rel="stylesheet"
	href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css"
  /> -->
  <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
  <link rel="stylesheet" href="uploads/css/jquery.fileupload.css" />
  <link rel="stylesheet" href="uploads/css/jquery.fileupload-ui.css" />
  <!-- CSS adjustments for browsers with JavaScript disabled -->
  <noscript
	><link rel="stylesheet" href="uploads/css/jquery.fileupload-noscript.css"
  /></noscript>
  <noscript
	><link rel="stylesheet" href="uploads/css/jquery.fileupload-ui-noscript.css"
  /></noscript>

				  </head>






				
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('uploads/images/bg1.jpg')">
					<div class="container">
					  <!-- The file upload form used as target for the file upload widget -->
					  <form
						id="fileupload"
						action="https://jquery-file-upload.appspot.com/"
						method="POST"
						enctype="multipart/form-data"
					  >
						<!-- Redirect browsers with JavaScript disabled to the origin page -->
						<noscript
						  ><input
							type="hidden"
							name="redirect"
							value="https://blueimp.github.io/jQuery-File-Upload/"
						/></noscript>
						<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
						<div class="row fileupload-buttonbar">
						  <div class="col-lg-7">
							<!-- The fileinput-button span is used to style the file input field as button -->
							<span class="btn btn-success fileinput-button">
							  <i class="glyphicon glyphicon-plus"></i>
							  <span>Add files...</span>
							  <input type="file" name="files[]" multiple />
							</span>
				
							<button type="submit" class="btn btn-primary start">
							  <i class="glyphicon glyphicon-upload"></i>
							  <span>Start upload</span>
							</button>
				
							<button type="reset" class="btn btn-warning cancel">
							  <i class="glyphicon glyphicon-ban-circle"></i>
							  <span>Cancel upload</span>
							</button>
							
							<button type="button" class="btn btn-danger delete">
							  <i class="glyphicon glyphicon-trash"></i>
							  <span>Delete selected</span>
							</button>
							<input type="checkbox" class="toggle" />
							<!-- The global file processing state -->
							<span class="fileupload-process"></span>
						  </div>
						  <!-- The global progress state -->
						  <div class="col-lg-5 fileupload-progress fade">
							<!-- The global progress bar -->
							<div
							  class="progress progress-striped active"
							  role="progressbar"
							  aria-valuemin="0"
							  aria-valuemax="100"
							>
							  <div
								class="progress-bar progress-bar-success"
								style="width: 0%;"
							  ></div>
							</div>
							<!-- The extended global progress state -->
							<div class="progress-extended">&nbsp;</div>
						  </div>
						</div>
						<!-- The table listing the files available for upload/download -->
						<table role="presentation" class="table table-striped">
						  <tbody class="files"></tbody>
						</table>
					  </form>
					</div>
					<!-- The blueimp Gallery widget -->
					<div
					  id="blueimp-gallery"
					  class="blueimp-gallery blueimp-gallery-controls"
					  aria-label="image gallery"
					  aria-modal="true"
					  role="dialog"
					  data-filter=":even"
					>
					  <div class="slides" aria-live="polite"></div>
					  <h3 class="title"></h3>
					  <a
						class="prev"
						aria-controls="blueimp-gallery"
						aria-label="previous slide"
						aria-keyshortcuts="ArrowLeft"
					  ></a>
					  <a
						class="next"
						aria-controls="blueimp-gallery"
						aria-label="next slide"
						aria-keyshortcuts="ArrowRight"
					  ></a>
					  <a
						class="close"
						aria-controls="blueimp-gallery"
						aria-label="close"
						aria-keyshortcuts="Escape"
					  ></a>
					  <a
						class="play-pause"
						aria-controls="blueimp-gallery"
						aria-label="play slideshow"
						aria-keyshortcuts="Space"
						aria-pressed="false"
						role="button"
					  ></a>
					  <ol class="indicator"></ol>
					</div>
					<!-- The template to display files available for upload -->
					<script id="template-upload" type="text/x-tmpl">
					  {% for (var i=0, file; file=o.files[i]; i++) { %}
						  <tr class="template-upload fade{%=o.options.loadImageFileTypes.test(file.type)?' image':''%}">
							  <td>
								  <span class="preview"></span>
							  </td>
							  <td>
								  <p class="name">{%=file.name%}</p>
								  <strong class="error text-danger"></strong>
							  </td>
							  <td>
								  <p class="size">Processing...</p>
								  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
							  </td>
							  <td>
								  {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
									<button class="btn btn-success edit" data-index="{%=i%}" disabled>
										<i class="glyphicon glyphicon-edit"></i>
										<span>Edit</span>
									</button>
								  {% } %}
								  {% if (!i && !o.options.autoUpload) { %}
									  <button class="btn btn-primary start" disabled>
										  <i class="glyphicon glyphicon-upload"></i>
										  <span>Start</span>
									  </button>
								  {% } %}
								  {% if (!i) { %}
									  <button class="btn btn-warning cancel">
										  <i class="glyphicon glyphicon-ban-circle"></i>
										  <span>Cancel</span>
									  </button>
								  {% } %}
							  </td>
						  </tr>
					  {% } %}
					</script>
					<!-- The template to display files available for download -->
					<script id="template-download" type="text/x-tmpl">
					  {% for (var i=0, file; file=o.files[i]; i++) { %}
						  <tr class="template-download fade{%=file.thumbnailUrl?' image':''%}">
							  <td>
								  <span class="preview">
									  {% if (file.thumbnailUrl) { %}
										  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
									  {% } %}
								  </span>
							  </td>
							  <td>
								  <p class="name">
									  {% if (file.url) { %}
										  <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
									  {% } else { %}
										  <span>{%=file.name%}</span>
									  {% } %}
								  </p>
								  {% if (file.error) { %}
									  <div><span class="label label-danger">Error</span> {%=file.error%}</div>
								  {% } %}
							  </td>
							  <td>
								  <span class="size">{%=o.formatFileSize(file.size)%}</span>
							  </td>
							  <td>
								  {% if (file.deleteUrl) { %}
									  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
										  <i class="glyphicon glyphicon-trash"></i>
										  <span>Delete</span>
									  </button>
									  <input type="checkbox" name="delete" value="1" class="toggle">
								  {% } else { %}
									  <button class="btn btn-warning cancel">
										  <i class="glyphicon glyphicon-ban-circle"></i>
										  <span>Cancel</span>
									  </button>
								  {% } %}
							  </td>
						  </tr>
					  {% } %}
					</script>
					<script
					  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
					  integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
					  crossorigin="anonymous"
					></script>
					<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
					<script src="uploads/js/vendor/jquery.ui.widget.js"></script>
					<!-- The Templates plugin is included to render the upload/download listings -->
					<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
					<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
					<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
					<!-- The Canvas to Blob plugin is included for image resizing functionality -->
					<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
					<!-- blueimp Gallery script -->
					<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
					<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
					<script src="uploads/js/jquery.iframe-transport.js"></script>
					<!-- The basic File Upload plugin -->
					<script src="uploads/js/jquery.fileupload.js"></script>
					<!-- The File Upload processing plugin -->
					<script src="uploads/js/jquery.fileupload-process.js"></script>
					<!-- The File Upload image preview & resize plugin -->
					<script src="uploads/js/jquery.fileupload-image.js"></script>
					<!-- The File Upload audio preview plugin -->
					<script src="uploads/js/jquery.fileupload-audio.js"></script>
					<!-- The File Upload video preview plugin -->
					<script src="uploads/js/jquery.fileupload-video.js"></script>
					<!-- The File Upload validation plugin -->
					<script src="uploads/js/jquery.fileupload-validate.js"></script>
					<!-- The File Upload user interface plugin -->
					<script src="uploads/js/jquery.fileupload-ui.js"></script>
					<!-- The main application script -->
					<script src="uploads/js/demo.js"></script>
					<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
					<!--[if (gte IE 8)&(lt IE 10)]>
					  <script src="js/cors/jquery.xdr-transport.js"></script>
					<![endif]-->
				





			
			<form class="form-detail" action="#" method="post">
				<h2>Upload Event</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Name" required>
					</div>
					<div class="form-row">
						<input type="text" name="people" id="your-email" class="input-text" placeholder="People" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="text" id="type" class="input-text" placeholder="Type" required>
					</div>
					<div class="form-row">
						<input type="text" name="media" id="media" class="input-text" placeholder="Media" required>
					</div>
				</div>


{{-- 

<!-- Redirect browsers with JavaScript disabled to the origin page -->
<noscript
><input
  type="hidden"
  name="redirect"
  value="https://blueimp.github.io/jQuery-File-Upload/"
/></noscript>
<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
<div class="row fileupload-buttonbar">
<div class="col-lg-7">
  <!-- The fileinput-button span is used to style the file input field as button -->
  <span class="btn btn-success fileinput-button">
	<i class="glyphicon glyphicon-plus"></i>
	<span>Add files...</span>
	<input type="file" name="files[]" multiple />
  </span>

  <button type="submit" class="btn btn-primary start">
	<i class="glyphicon glyphicon-upload"></i>
	<span>Start upload</span>
  </button>

  <button type="reset" class="btn btn-warning cancel">
	<i class="glyphicon glyphicon-ban-circle"></i>
	<span>Cancel upload</span>
  </button>
  
  <button type="button" class="btn btn-danger delete">
	<i class="glyphicon glyphicon-trash"></i>
	<span>Delete selected</span>
  </button>
  <input type="checkbox" class="toggle" />
  <!-- The global file processing state -->
  <span class="fileupload-process"></span>
</div>
<!-- The global progress state -->
<div class="col-lg-5 fileupload-progress fade">
  <!-- The global progress bar -->
  <div
	class="progress progress-striped active"
	role="progressbar"
	aria-valuemin="0"
	aria-valuemax="100"
  >
	<div
	  class="progress-bar progress-bar-success"
	  style="width: 0%;"
	></div>
  </div>
  <!-- The extended global progress state -->
  <div class="progress-extended">&nbsp;</div>
</div>
</div>
<!-- The table listing the files available for upload/download -->
<table role="presentation" class="table table-striped">
<tbody class="files"></tbody>
</table>

 --}}



				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Upload">
				</div>


















			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>