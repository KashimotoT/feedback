@extends('layouts.default')

@section('content')
<h1>新規登録</h1>
<form action="{{ url('feedback') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST')}}
    <div class="form-group">
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="content">感想</label>
        <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">登録する</button>
</form>
@endsection
