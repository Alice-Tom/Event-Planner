@extends('forms.forms')
@section('content')
	

		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-4.jpg" alt="">
				</div>
				<form action="">
					<h3>Upload Events</h3>
                    
                    {{-- name --}}
					<div class="form-holder active">
						<input type="text" placeholder="name" class="form-control">
					</div>
                    
                    {{-- people --}}
					<div class="form-holder">
						<input type="text" placeholder="people" class="form-control">
					</div>
                    
                    {{-- slug --}}
					<div class="form-holder">
						<input type="text" placeholder="slug" class="form-control">
					</div>
                    
                    {{-- password --}}
					<div class="form-holder">
						<input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div>
                    
                    {{-- upload --}}
					<div class="form-holder">
						<input type="file" multiple placeholder="media" class="form-control">
					</div>
					
					<div class="form-login">
						<button>Upload</button>
						
					</div>
				</form>
			</div>
		</div>
		@endsection