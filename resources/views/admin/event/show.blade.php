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
                    <i class="fas fa-trash-alt" title="Delete Image"></i>
                    <i class="far fa-eye" title="View Image"></i>
                    
                </p>
                </div>
            </div>
            @endforeach
            <div class="form-row-last">
           <a href="/media/delete-multiple/{{$event->media}}" ><input type="submit" name="register" class="delete" value="Delete All"></a>
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
