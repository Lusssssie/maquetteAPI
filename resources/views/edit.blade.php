<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="supportersBody" style="background-image: url('https://source.unsplash.com/1600x900/?stars%2Cspace%2Cmoon%2Cplanet%2Cplanets=')">
        <div class="divGoBack"><a id="aGoBack" href="/test/about/"><div class="goBack"></div></a></div>
        <div class="flex-center position-ref full-height">
            <div id="content">
                <div class="title">
                  Edit your info
                </div>



                <form action="" method="post">
                    @csrf

                  {{--
                  <label>Surname</label>
                  <input type="text" name="surname" placeholder="Type in your surname.." autocomplete="off" required>
                  <p>{{ $supporters->surname }}</p>

                  <label>Firstname</label>
                  <input type="text" name="firstname" value="{{ $supporters->firstname }}" required>

                  <label>Pseudo</label>
                  <input type="text" name="pseudo" value="{{ $supporters->pseudo }}" required>

                  <label>Email</label>
                  <input type="text" name="email" value="{{ $supporters->email }}" required>
                  <button action="{{ route('supporters-update') }}">Submit</button>
                  --}}

                </form>
            </div>
        </div>
    </body>
</html>
