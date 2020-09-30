@extends('pages.event')

@section('content')

<div class="page-content">
	<div class="form-v9-content" style="background-image: url({{asset('uploads/images/bg1.jpg')}})">
		<form 
			class="form-detail" 
			method="post"
			action="{{ route('event.store') }}" 
			enctype="multipart/form-data"
		>
			@csrf

			<h2>Upload Event</h2>
			{{-- row 1 --}}
			<div class="form-row-total">

				<div class="form-row">
					<input type="text" name="name" id="full-name" class="input-text" placeholder="Name" required>
				</div>
				<div class="form-row">
					<select class="input-text clients" name="clients[]" multiple="multiple"></select>
				</div>
			</div>

			{{-- row 2 --}}
			<div class="form-row-total">
				<div class="form-row">
					<input type="text" name="type" id="type" class="input-text" placeholder="Type" required>
				</div>
				<div class="form-row">
					<input type="text" name="display_photo" id="media" class="input-text" placeholder="Display Photo" required>
				</div>
			</div>

			{{-- row 3 --}}
			<div class="form-row-total">
				<div class="form-row">
					<input type="date" name="" id="date" class="input-text" placeholder="date" required>
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
				</div>
			</div>

			{{-- row 4 --}}
			<div class="form-row-total">
				<div class="form-row">
					<textarea id="description" rows="4" class="input-text" name="description"></textarea>

					
				</div>
				<div class="form-row">
					<input type="date" name="" id="date" class="input-text" placeholder="date" required>
				</div>
			</div>



			<div class="input-field">
				<div class="media-upload" style="padding-top: .5rem;"></div>
			</div>

			<div class="form-row-last">
				<input type="submit" name="register" class="register" value="Upload">
			</div>

		</form>
	</div>
</div>

@endsection