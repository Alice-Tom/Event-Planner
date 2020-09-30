<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <title>Flavour Events</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        

         <!-- Main Style Css -->
         <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
         <link rel="stylesheet" href="{{asset('css/css/style.css')}}"/>
         
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/css/nunito-font.css')}}">

       
       
         <!-- CSS to style image uploader -->
        <link rel="stylesheet" href="{{ asset('css/image-uploader.min.css') }}" /> 
        

    </head>
    
    <body class="form-v9">

        @yield('content')

    <!-- JQuery Library -->
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
    integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
    crossorigin="anonymous"
    ></script>

    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="{{ asset('js/image-uploader.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('.media-upload').imageUploader({
                extensions: ['.jpg','.jpeg','.png','.gif','.svg', '.mp4'],
                mimes: ['image/jpeg','image/png','image/gif','image/svg+xml', 'video/mp4', ''],
                imagesInputName: 'media',
            });

            $(".clients").select2({
                tags: true
            });
        });
    </script>    
    </body>
</html>
