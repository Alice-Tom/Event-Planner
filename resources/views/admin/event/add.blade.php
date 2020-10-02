@extends('pages.event')

@section('content')

<div class="page-content">
	<div class="form-v9-content" style="background-image: url({{asset('uploads/images/bg1.jpg')}})">
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
        });
    });
    $(document).ready(function () {
        $('.display-upload').imageUploader({
            extensions: ['.jpg','.jpeg','.png', '.mp4'],
            mimes: ['image/jpeg','image/png', 'video/mp4', ''],
            imagesInputName: 'media',
        });
    });
</script>
@endsection