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
        <div class="divGoBack"><a href="../../"><div class="goBack"></div></a></div>
        <div class="flex-center position-ref full-height">
            <div id="content">
                <div class="title">
                    Join the club!
                </div>
                <form action="{{ route('supporters-insert') }}" method="post">
                    @csrf
                  <label>Surname</label>
                  <input type="text" name="surname" placeholder="Type in your surname.." autocomplete="off" required />
                  <label>Firstname</label>
                  <input type="text" name="firstname" placeholder="Enter your firstname.." autocomplete="off" required />
                  <label>Pseudo</label>
                  <input type="text" name="pseudo" placeholder="Enter your pseudo.." autocomplete="off" required />
                  <label>Email</label>
                  <input type="text" name="email" placeholder="Enter your email.." autocomplete="off" required />
                  <button>Join!</button>
                </form>
                <div class="theClub">
                    <h1>The club</h1>
                    <div class="supporters">
                        <div class="supporter">
                            <p>Pseudo</p>
                            <p>Contact them here</p>
                        </div>
                            @foreach($supporters as $supporter)
                            <div class="supporter">
                                <span></span>
                                <div class="supporterContainer">
                                  <div>
                                    <p>{{ $supporter->pseudo }}</p>
                                    <p>{{ $supporter->email }}</p>
                                  </div>
                                  <div>
                                    <a href="{{ route('supporters-edit', ['id' => $supporter->id]) }}">
                                      <img src="/images/edit.svg" alt="Modifier ce supporter">
                                    </a>
                                  </div>
                                  <div>
                                    <a href="{{ route('supporters-delete', ['id' => $supporter->id]) }}">
                                      <img src="/images/cross.svg" alt="Supprimer ce supporter de la liste référançant les membres du club">
                                    </a>
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
