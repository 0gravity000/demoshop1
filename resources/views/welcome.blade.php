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
                    <a href="/">Demo Shop1（ロゴ）</a>
                </div>
                <div class="col">
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
