@extends('pages.event')

@section('content')

<div class="page-content">
	<div class="form-v9-content" style="background-image: url({{asset('uploads/images/bg1.jpg')}})">
		<h2>Register Event</h2>
        <form 
            class="form-detail" 
            method="post"
            action="{{ route('event.update', $event->id) }}" 
            enctype="multipart/form-data"
        >
            @csrf
            @include('forms.event_form')
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        let media = {!! json_encode($event->media ?? array()) !!}
        let preloaded = media.map( media => {
			return {
				id : media.id,
				src : media.urls
			}
		});

        $('.media-upload').imageUploader({
            extensions: ['.jpg','.jpeg','.png', '.mp4'],
            mimes: ['image/jpeg','image/png', 'video/mp4', ''],
            imagesInputName: 'media',
			preloaded: preloaded
        });
    });
</script>

@endsection