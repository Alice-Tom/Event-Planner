<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>The Event Planner</title>
        
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/css/nunito-font.css')}}">
        
        <!-- CSS to style image uploader -->
        <link rel="stylesheet" href="{{ asset('css/image-uploader.min.css') }}" />

        <!-- Main Style Css -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/css/style.css')}}"/>
        
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

        <!-- The Image Uploader -->
        <script src="{{ asset('js/image-uploader.min.js') }}"></script>

        <!-- The Display Uploader -->
        <script src="{{ asset('js/display-uploader.min.js') }}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head>
            
    <body class="form-v9">

        @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <script>
         $(document).ready(function(){
            $(".clients").select2({
                tags: true
            });
        });
    </script>
    </body>
</html>
