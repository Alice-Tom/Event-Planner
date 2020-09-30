@extends('pages.event')

@section('content')
	<div class="container">
		<form 
			action="{{ route('event.store') }}" 
			method="post"
			enctype="multipart/form-data"
		>
			@csrf
			<div class="input-field">
				<div class="media-upload" style="padding-top: .5rem;"></div>
			</div>

		</form>
	</div>
	
@endsection