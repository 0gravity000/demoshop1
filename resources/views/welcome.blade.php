<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Shop1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS -->
        <!-- webpack.mix.jsに使用するcssファイルを記載する -->
        <!-- public/css/all.cssを読み込む(パス public/は省略して指定する) -->
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <!-- bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    Demo Shop1
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
                    </div>
                </div>
                <div class="col">
                2 of 2
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="sentence1">文章をここに記載</p>
                    <a href="https://laravel.com/docs">Get Started</a>
                </div>
                <div class="col">
                2 of 3
                </div>
                <div class="col">
                3 of 3
                </div>
            </div>
        </div>

    </body>
</html>
