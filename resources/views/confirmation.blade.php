<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Confirmation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="contentConfirmation">
        <div class="flex-center position-ref full-height">
            <div>
            <h1>Thanks for your input!</h1>
            <p>Click <a href="/test/about/">here</a> to return to where you were</p>

            </div>
        </div>
    </body>
</html>
