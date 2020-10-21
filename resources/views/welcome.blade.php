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
            <div class="row header">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="/">Demo Shop1（ロゴ）</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row content1">
                <div class="col">
                    <p class="sentence1"><a href="/">内容1</a></p>
                </div>
                <div class="col">
                2 of 3
                </div>
                <div class="col">
                3 of 3
                </div>
            </div>
            <div class="row content2">
                <div class="col">
                    <p class="sentence1"><a href="/">内容2</a></p>
                </div>
                <div class="col">
                2 of 3
                </div>
                <div class="col">
                3 of 3
                </div>
            </div>
            <div class="row content3">
                <div class="col">
                    <p class="sentence1"><a href="/">内容3</a></p>
                </div>
                <div class="col">
                2 of 3
                </div>
                <div class="col">
                3 of 3
                </div>
            </div>
            <div class="row footer">
                <div class="col">
                    <p class="sentence1">フッター</p>
                </div>
            </div>
        </div>

    </body>
</html>
