@extends('layouts.default')

@section('content')
<h1>作品登録</h1>
<form action="{{ url('works') }}" method="post">
    {{ csrf_field() }}
    {{ method_field('POST')}}


    <div class="form-group">
        <select class=custom-select name="author">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <label for="title">タイトル</label>
        <input id="title" type="text" name="title" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">登録する</button>
</form>
@endsection
