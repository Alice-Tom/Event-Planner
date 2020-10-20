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

            @foreach ($event->getMedia($event->token) as $event_images)
            <div class="card" style="width: 13rem;" >
                <br>
                {{-- <img src="{{ $event_images->getUrl('image_preview') }}" > --}}
                {{ $event_images('thumb') }}
                <div class="card-body">
                <p class="card-text">
                    <i class="fas fa-trash-alt delete_media" title="Delete Image" data-media_id="{{ $event_images->id }}"></i>
                    <i class="far fa-eye view_media" title="View Image" data-media_id="{{ $event_images->id }}"></i>

                </p>
                </div>
            </div>
            @endforeach
            <div class="form-row-last">
           <a href="/media/delete-multiple/{{$event->id}}" ><input type="submit" name="register" class="delete" value="Delete All" id="delete-all"></a>
        </div>
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

        $('.delete_media').on('click', function(e) {
            e.preventDefault();

            let media = $(this).data('media_id');

            let url = `/admin/event/media/delete-single/${media}`

            axios.delete(url)
                 .then(response => location.reload())
                 .catch(error => console.log(error))
        })

        $('#delete-all').on('click', function(e) {
            e.preventDefault();

            let url = `{{ route("admin.event.media.delete.all", $event->id) }}`

            axios.delete(url)
                 .then(response => location.reload())
                 .catch(error => console.log(error))
        })
    });

</script>

@endsection
