<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRFトークン -->
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- bootstrap4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- サービス名 -->
            <a class="navbar-brand" href="{{ url('/home') }}">{{ config('app.name', 'Laravel') }}</a>

            <!-- モバイル時のメニューボタン -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- ログアウト時のメニュー -->
            @guest
                <nav class="navbar navbar-light bg-light">
                    <a class="btn btn-primary" href="{{ url('login') }}" role="button">{{ __('Login') }}</a>
                </nav>
            @endguest
            <!-- ログイン時のメニュー -->
            @auth
                <div class="collapse navbar-collapse" id="Navber">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('works') }}">{{ __('Works') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">{{ __('Users') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                        </li>
                    </ul>
                </div>
            @endauth
        </nav>

        <!-- 個別ページの内容 -->
        <div class="container mt-3">
            @yield('content')
        </div>

        <!-- bootstrap script -->
    </body>
</html>
