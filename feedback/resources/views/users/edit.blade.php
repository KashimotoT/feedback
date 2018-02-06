@extends('layouts.default')

@section('content')
<h1>ユーザー情報変更</h1>
<form action="{{ url('users/'.$user->id ) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label for="name">作家名</label>
        <input id="name" type="text" name="name" class="form-control" required autofocus>
    </div>
    <!-- <div class="form-group">
        <label for="email">メールアドレス</label>
        <input id="email" type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">パスワード</label>
        <input id="password" type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation">パスワード（確認）</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
    </div> -->
    <button type="submit" name="submit" class="btn btn-primary">更新する</button>
</form>
@endsection
