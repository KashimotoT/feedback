@extends('layouts.default')

@section('content')
<h1>作品登録</h1>
<form action="{{ url('works') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST')}}
    <div class="form-group">
        <label for="author">著者</label>
        <input id="author" type="text" name="author" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">登録する</button>
</form>
@endsection
