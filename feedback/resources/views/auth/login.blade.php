@extends('layouts.default')

@section('content')
<h1>Login</h1>
<form action="{{ route('login') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group form-row">
        <div class="col-md-4">
            <label for="inputEmail">メールアドレス</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレス">
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-md-4">
            <label for="inputPassword">パスワード</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="パスワード">
        </div>
    </div>
    <button type="submit" id="submit" class="btn btn-primary" name="submit">ログイン</button>
</form>
@endsection
