
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
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="uploads/css/style.css"/>
	
</head>
		
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('uploads/images/bg1.jpg')">
			<form class="form-detail" action="#" method="post">
				<h2>Upload Event</h2>
				{{-- row 1 --}}
				<div class="form-row-total">

					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Name" required>
					</div>
					<div class="form-row">
						<select class="input-text clients" multiple="multiple"></select>
					</div>
				</div>

				{{-- row 2 --}}
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="text" id="type" class="input-text" placeholder="Type" required>
					</div>
					<div class="form-row">
						<input type="text" name="media" id="media" class="input-text" placeholder="Media" required>
					</div>
				</div>


				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Upload">
				</div>

			</form>
		</div>
	</div>

	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script>
		$(".clients").select2({
			tags: true
			});
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

