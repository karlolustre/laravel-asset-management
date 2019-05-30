<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scoot Anywhere</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style_landing.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row ">
                <div class="offset-md-8 col-md-4">
                    <img src="{{URL::asset('/images/sa4.png')}}" class="logo-landing mb-3" alt="">
                </div>
                <div class="offset-md-8 col-md-4 ">
                    <a href="/menu/catalog" class="btn btn-light btn-block"> BOOK NOW </a>
                    <a href="/login" class="btn btn-light btn-block"> LOGIN </a>
                    
                </div>
            </div>
        </div>

        

    </body>
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
