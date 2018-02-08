@extends('layouts.default')

@section('content')
<h1>作品情報変更</h1>
<form action="{{ url('works/'.$work->id ) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
    <div class="form-group">
        <label for="author">著者</label>
        <input id="author" type="text" name="author" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">更新する</button>
</form>
@endsection
