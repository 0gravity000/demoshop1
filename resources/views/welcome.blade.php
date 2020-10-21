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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row header">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #008080;">
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
            </div>
            <div class="row content1">
                <div class="col-4">
                    <h1>おすすめ商品</h1>
                    <div id="carousel-1" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="imgs/item_001.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="imgs/item_002.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="imgs/item_003.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>カテゴリ</h1>
                </div>
            </div>
            <div class="row content2">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            生活雑貨
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item showmore">もっと見る</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">
                            ルームウェア
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item showmore">もっと見る</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">
                            食器
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item showmore">もっと見る</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl">
                    <div class="card">
                        <div class="card-header">
                            寝具
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item showmore">もっと見る</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row content3">
                <div class="col">
                    <h1>お知らせ</h1>
                    <table>
                    <tr>
                        <td>2020/10/01</td>
                        <td>送料無料のお買い上げ合計金額変更のお知らせ</td>
                    </tr>
                    <tr>
                        <td>2020/10/02</td>
                        <td>お問い合わせについて</td>
                    </tr>
                    <tr>
                        <td>2020/10/03</td>
                        <td>店舗営業時間変更のお知らせとご来店時のお願い</td>
                    </tr>
                    <tr>
                        <td>2020/10/04</td>
                        <td>コロナウィルス対策について</td>
                    </tr>
                    </table>
                    <p class="showmore">もっと見る</p>

                </div>
                <div class="col">
                    <h1>店舗情報</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.2010520583904!2d139.76524402935442!3d35.68122508769894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1603252916389!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
            <div class="row footer">
                <div class="col">
                    <p>copyright (c) demo shop1 Inc. all rights reserved.</p>
                </div>
            </div>
        </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
