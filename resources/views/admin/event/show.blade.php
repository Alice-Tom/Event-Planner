@extends('pages.event')

@section('content')

<div class="page-content">
	<div class="form-v9-content" style="background-image: url({{asset('css/images/bg1.jpg')}})">
		<h2>Register Event</h2>
        <form
            class="form-detail"
            method="post"
            action="{{ route('admin.event.update', $event->id) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @include('forms.event_form')
        </form>
        <div class="card-deck ml-2">
            @foreach ($event->getMedia($event->token) as $event_images)
            <div class="card" style="width: 18rem;">
                {{-- <img src="{{ $event_images->getUrl('image_preview') }}" > --}}
                {{ $event_images('thumb') }}
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.media-upload').imageUploader({
            extensions: ['.jpg','.jpeg','.png', '.mp4', '.JPG','.JPEG','.PNG', '.MP4'],
            mimes: ['image/jpeg','image/png', 'video/mp4', ''],
            imagesInputName: 'media',
        });

		$('.display-upload').imageUploader({
            extensions: ['.jpg','.jpeg','.png', '.mp4', '.JPG','.JPEG','.PNG', '.MP4'],
			mimes: ['image/jpeg','image/png', 'video/mp4', ''],
            imagesInputName: 'display_photo',
            maxFiles: 1,
		});

        $('#delete_media').on('click', (e) => {
            e.preventDefault();

            let media = $(this).data('media_id');

            $.ajax({
                url: `/admin/event/media/delete-single/${media}`,

                method: 'DELETE',

                success: function(data) {
                    console.log(data)
                },

                error: function(error) {
                    console.log('error', error);
                }
            })
        })
    });

</script>

@endsection
