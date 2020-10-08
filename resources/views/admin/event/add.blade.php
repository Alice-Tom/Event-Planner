@extends('pages.event')

@section('content')

<div class="page-content">
	<div class="form-v9-content" style="background-image: url({{asset('css/images/bg1.jpg')}})">
		<h2>Register Event</h2>
        <form
            class="form-detail"
            method="post"
            action="{{ route('event.store') }}"
            enctype="multipart/form-data"
        >
            @csrf
            @include('forms.event_form')
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.media-upload').imageUploader({
            extensions: ['.jpg','.jpeg','.png', '.mp4'],
            mimes: ['image/jpeg','image/png', 'video/mp4', ''],
            imagesInputName: 'media',
            label: 'Drag and drop pictures here or click to browse'
		});

		$('.display-upload').imageUploader({
			extensions: ['.jpg','.jpeg','.png', '.mp4'],
			mimes: ['image/jpeg','image/png', 'video/mp4', ''],
			imagesInputName: 'display_photo',
			maxFiles: 1,
            label: 'Drag and drop pictures here or click to browse'
		});
    });
</script>
@endsection
