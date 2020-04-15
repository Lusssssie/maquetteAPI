<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Lucie JUGLAIR"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>API NASA</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"> 
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 
    </head>
    <body class="moon">
        <nav>
            <ul>
                <a><li>Galleries</li></a>
                <a href="/test/about"><li>About</li></a>
                <a><li>Contact</li></a>
                <form class="search">
                    <input type="search" name="search" placeholder="Search...">
                </form>                           
            </ul>
        </nav>
        <div class="content">
            <div class="leftBlock">
                <img src="{{asset('images/cube.svg')}}">
                <div class="textLeftBlock">
                    <p>Deritative Work</p>
                    <p class="lighter">NASA based</p> 
                </div> 
            </div>
            <div>
                <div class="rightBlock">
                    <span></span>
                    <span></span>
                    <h1>Here begins our World.</h1>
                    <div class="slider">
                        <span class="buttonUp"></span>
                        <p>{{ $dataBody->name }}</p>
                        <span class="buttonDown"></span>
                    </div>
                </div>
                <div class="bottomBlock">
                    <table>
                        <tr>
                            <td>RADIUS</td>
                            <td>MASS</td>
                            <td>GRAVITY</td>
                            <td>SIDERAL ROTATION</td> 
                        </tr>
                        <tr>
                            <td>{{ $dataBody->equaRadius }} km</td>
                            <td>{{ $dataBody->mass->massValue }} x10<span>{{ $dataBody->mass->massExponent }}</span> kg</td>
                            <td>{{ $dataBody->gravity }} m/s²</td>
                            <td>{{ $dataBody->sideralRotation }} hours</td> 
                        </tr>
                    </table>                
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <script type="text/javascript" src="{{asset('js/jQuery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
