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
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>

            <!-- モバイル時のメニューボタン -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="Navber">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('works') }}">{{ '作品一覧' }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">{{ '著者一覧' }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('feedback/create') }}">{{ '感想投稿' }}</a>
                        </li>
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>

                <!-- right menu -->
                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ 'ログイン' }}</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users/'.auth()->user()->id) }}">{{ 'マイページ' }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">{{ 'ログアウト' }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endguest
                </ul>

        </nav>
        <!-- 個別ページの内容 -->
        <div class="container mt-3">
            @yield('content')
        </div>

        <!-- bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- スクリプトの内容 -->
        <script type="text/javascript">
            @yield('script')
        </script>
    </body>
</html>
